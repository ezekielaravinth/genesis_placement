<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ComingsoonController extends AbstractController
{

    #[Route('/comingsoon', name: 'app_comingsoon')]
    public function notFound(): Response
    {
        return $this->render('coming-soon.html.twig');
    }

    // (optional) POST route can be separate later
}
