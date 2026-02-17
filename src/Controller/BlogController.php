<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    private array $blogs = [
        [
            'id' => 1,
            'img' => 'assets/img/blog-1.jpg', 
            'title' => 'How To Work with jobstock Agency',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '10 Jul 2026',
        ],
        [
            'id' => 2,
            'img' => 'assets/img/blog-2.jpg', 
            'title' => 'Auctor sit elementum habitant vel tempor varius.',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '17 Jan 2026',
        ],
        [
            'id' => 3,
            'img' => 'assets/img/blog-3.jpg', 
            'title' => 'Consectetur purus habitasse ut diam habitant varius.',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '26 Feb 2026',
        ],
        [
            'id' => 4,
            'img' => 'assets/img/blog-7.jpg', 
            'title' => 'Smartest Applications for Business',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '19 Dec 2026',
        ],
        [
            'id' => 5,
            'img' => 'assets/img/blog-4.jpg', 
            'title' => 'Stop Worrying About Deadlines! We Got You Covered',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '10 Aug 2026',
        ],
        [
            'id' => 6,
            'img' => 'assets/img/blog-5.jpg', 
            'title' => 'Change Your Strategy: Find a Business Consultant',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '16 Jul 2026',
        ],
        [
            'id' => 7,
            'img' => 'assets/img/blog-6.jpg', 
            'title' => 'Everything About Financial Modeling',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '07 May 2026',
        ],
        [
            'id' => 8,
            'img' => 'assets/img/blog-7.jpg', 
            'title' => 'On the other hand we provide denounce',
            'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',
            'date' => '19 Dec 2026',
        ]
    ];

    #[Route('/blog-detail/{slug?}', name: 'app_blog_detail')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->blogs as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('blog-detail.html.twig', [
            'article' => $article ?? ['img' => '', 'title' => '', 'date' => ''],
            'blogs' => $this->blogs,
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-._+&!:]+/', '-', $title), '-'));
    }
}