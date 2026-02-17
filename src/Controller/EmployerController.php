<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EmployerController extends AbstractController
{
    private array $employers = [
        [
            'id' => 1,
            'img' => 'assets/img/l-4.png', 
            'name' => 'Software & Consultancy', 
            'title' => 'Swap Technology',
            'location' => 'California, USA', 
            'open' => '06 Open position', 
        ],
        [
            'id' => 2,
            'img' => 'assets/img/l-5.png', 
            'name' => 'Photo Edditing Tools', 
            'title' => 'Photoshop',
            'location' => 'New York, USA', 
            'open' => '16 Open position', 
        ],
        [
            'id' => 3,
            'img' => 'assets/img/l-6.png', 
            'name' => 'Web Browser & Tech', 
            'title' => 'Firefox',
            'location' => 'Denver, USA', 
            'open' => '03 Open position', 
        ],
        [
            'id' => 4,
            'img' => 'assets/img/l-7.png', 
            'name' => 'Business Directory', 
            'title' => 'Airbnb',
            'location' => 'London, UK', 
            'open' => '08 Open position', 
        ],
        [
            'id' => 5,
            'img' => 'assets/img/l-8.png', 
            'name' => 'Message & Video Reelas', 
            'title' => 'Snapchat',
            'location' => 'London, UK', 
            'open' => '07 Open position', 
        ],
        [
            'id' => 6,
            'img' => 'assets/img/l-9.png', 
            'name' => 'Portfolio Showcase', 
            'title' => 'Dribbble Inc',
            'location' => 'New York, USA', 
            'open' => '05 Open position', 
        ],
        [
            'id' => 7,
            'img' => 'assets/img/l-10.png', 
            'name' => 'Chat & Video Calling', 
            'title' => 'Skype',
            'location' => 'Canada, USA', 
            'open' => '10 Open position', 
        ],
        [
            'id' => 8,
            'img' => 'assets/img/l-11.png', 
            'name' => 'Software & Consultancy', 
            'title' => 'Google Inc',
            'location' => 'London, UK', 
            'open' => '06 Open position', 
        ],
        [
            'id' => 8,
            'img' => 'assets/img/l-1.png', 
            'name' => 'Software & Consultancy', 
            'title' => 'Tripadvisor',
            'location' => 'California, USA', 
            'open' => '07 Openings', 
            'est' => 'Est: 1992',
        ],
        [
            'id' => 9,
            'img' => 'assets/img/l-2.png', 
            'name' => 'Photo Showcase & Tools', 
            'title' => 'Pinterest - Punjab',
            'location' => 'Austrailia', 
            'open' => '03 Openings', 
            'est' => 'Est: 2003', 
        ],
        [
            'id' => 10,
            'img' => 'assets/img/l-3.png', 
            'name' => 'Web & Applications', 
            'title' => 'Shopify - Delhi',
            'location' => 'Canada, USA', 
            'open' => '05 Openings', 
            'est' => 'Est: 1980', 
        ]
    ];

    private array $awards = [
        [
            'img' => 'assets/img/award-1.png', 
            'title' => 'FIFFA Award',
            'year' => 'May 2025',
        ],
        [
            'img' => 'assets/img/award-2.png', 
            'title' => 'COMPRA Award',
            'year' => 'Dec 2024',
        ],
        [
            'img' => 'assets/img/award-4.png', 
            'title' => 'ICCPR Award',
            'year' => 'Apr 2023',
        ],
        [
            'img' => 'assets/img/award-3.png', 
            'title' => 'XICAGO Award',
            'year' => 'July 2022',
        ]
    ];

    private array $views = [
        [
            'icon' => 'fa-solid fa-envelope-circle-check text-main', 
            'title' => 'Email Address',
            'name' => 'shreethemes@gmail.com',
        ],
        [
            'icon' => 'fa-solid fa-phone-volume text-main', 
            'title' => 'Contact No.',
            'name' => '9450 542 6325',
        ],
        [
            'icon' => 'fa-solid fa-layer-group text-main', 
            'title' => 'Category',
            'name' => 'Applications',
        ],
        [
            'icon' => 'fa-solid fa-user-group text-main', 
            'title' => 'Company Size',
            'name' => '1000-1500',
        ],
        [
            'icon' => 'fa-solid fa-map-location-dot text-main', 
            'title' => 'Location',
            'name' => 'California, USA',
        ],
        [
            'icon' => 'fa-solid fa-building-circle-check text-main', 
            'title' => 'Established',
            'name' => 'Oct 2010',
        ]
    ];

    #[Route('/employer-detail/{slug?}', name: 'app_employer_detail')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->employers as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('employer-detail.html.twig', [
            'article' => $article ?? ['img' => '', 'title' => '', 'open' => '', 'name' => '', 'location' => ''],
            'employers' => $this->employers,
            'awards' => $this->awards,
            'views' => $this->views
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-._+&]+/', '-', $title), '-'));
    }
}