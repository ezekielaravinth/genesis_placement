<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

final class CareersController extends AbstractController
{
    #[Route('/careers', name: 'app_careers', methods: ['GET', 'POST'])]
    public function index(Request $request, MailerInterface $mailer, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        if ($request->isMethod('POST')) {
            $submittedToken = $request->request->get('_csrf_token');
            if (!$csrfTokenManager->isTokenValid(new CsrfToken('careers_form', $submittedToken))) {
                return new Response('Invalid CSRF token', 403);
            }
            $name = $request->request->get('name');
            $emailInput = $request->request->get('email');
            $number = $request->request->get('number');
            $graduationYear = $request->request->get('graduationyear');
            $Message = $request->request->get('Message');
    
            // Basic validation (or use Symfony validator)
            if (!$name || !$emailInput || !$graduationYear || !$number || !$Message) {
                return new Response('Missing fields', 400);
            }
    
            $email = (new Email())
                ->from($emailInput)
                ->to('your-email@gmail.com') // Change to your email
                ->subject('Career Application from '.$name)
                ->html("
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$emailInput}</p>
                    <p><strong>Number:</strong> {$number}</p>
                    <p><strong>Message:</strong></p>
                    <p>{$Message}</p>
                ");
    
            try {
                $mailer->send($email);
            } catch (\Exception $e) {
                // Log the error and return a response for debugging
                return new Response('Mailer Error: '.$e->getMessage(), 500);
            }
    
            return new Response('Email sent successfully!');
        }

        return $this->render('careers.html.twig', [
            'careers' => $this->getCareers(),
        ]);
    }

    private function getCareers(): array
    {
        return [
            [
                'icon' => 'fa-solid fa-location-dot', 
                'name' => 'Hyderabad', 
                'title' => 'Krishe Emerald, Whitefields, Kondapur, Hyderabad, Telangana 500081',
                'mail' => 'shreethemes@gmail.com',
            ],
            [
                'icon' => 'fa-solid fa-map-location-dot', 
                'name' => 'Bengaluru', 
                'title' => 'Prestige Cube, Koramangala, Bengaluru, Karnataka 560029',
                'mail' => 'shreethemes@gmail.com',
            ],
            [
                'icon' => 'fa-solid fa-map-location', 
                'name' => 'Nagpur', 
                'title' => 'B-101, Vedant Sapphire, Sneha Nagar, Nagpur, Maharashtra, 440015',
                'mail' => 'shreethemes@gmail.com',
            ]
        ];
    }
}