<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Security\LoginAuthenticator;


class RegistrationController extends AbstractController
{
   #[Route('/signup', name: 'app_signup')]
public function signup(
    Request $request,
    EntityManagerInterface $em,
    UserPasswordHasherInterface $hasher,
    UserAuthenticatorInterface $userAuthenticator,
    LoginAuthenticator $authenticator
): Response {
    if ($this->getUser()) {
        return $this->redirectToRoute('app_index');
    }

    $user = new User();

    $form = $this->createForm(RegistrationFormType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        $hashedPassword = $hasher->hashPassword(
            $user,
            $form->get('password')->getData()
        );

        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_USER']);

        $em->persist($user);
        $em->flush();

        $this->addFlash('success', 'Registration successful! Welcome to JobStock 🎉');

        return $userAuthenticator->authenticateUser(
            $user,
            $authenticator,
            $request
        );
    }

    return $this->render('signup.html.twig', [
        'form' => $form->createView(), // ✅ THIS FIXES YOUR ERROR
    ]);
}
}