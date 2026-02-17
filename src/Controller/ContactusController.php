<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactusController extends AbstractController
{
    // ✅ VIEW ONLY (GET)
    #[Route('/contactus', name: 'app_contactus', methods: ['GET'])]
    public function contactus(): Response
    {
        return $this->render('contactus.html.twig');
    }

    // (optional) POST route can be separate later
}
