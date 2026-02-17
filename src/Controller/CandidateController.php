<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CandidateController extends AbstractController
{
    private array $candidates = [
        [
            'id' => 1,
            'img' => 'assets/img/team-1.jpg', 
            'title' => 'Kr. Shaurya Preet',
            'subtitle' => 'Sr. Web Designer',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 2,
            'img' => 'assets/img/team-2.jpg', 
            'title' => 'Leila T. Lindsey',
            'subtitle' => 'Magento Expert',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 3,
            'img' => 'assets/img/team-3.jpg', 
            'title' => 'Amie L. Brown',
            'subtitle' => 'WordPress Developer',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 4,
            'img' => 'assets/img/team-4.jpg', 
            'title' => 'Darrel T. Turner',
            'subtitle' => 'Jr. SEO Expert',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 5,
            'img' => 'assets/img/team-5.jpg', 
            'title' => 'Michael B. Arellano',
            'subtitle' => 'Front Designer',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 6,
            'img' => 'assets/img/team-6.jpg', 
            'title' => 'Kum K. Sellers',
            'subtitle' => 'PHP Developer',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 7,
            'img' => 'assets/img/team-7.jpg', 
            'title' => 'Debbie W. Wilson',
            'subtitle' => 'App Developer',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 8,
            'img' => 'assets/img/team-8.jpg', 
            'title' => 'Peggy J. Arnold',
            'subtitle' => 'Content Writer',
            'number' => '70/H',
            'years' => '5 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 9,
            'img' => 'assets/img/team-9.jpg', 
            'title' => 'Wanda D. Smith',
            'subtitle' => 'Sr. PHP Developer',
            'number' => '40/H',
            'years' => '2 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 10,
            'img' => 'assets/img/team-10.jpg', 
            'title' => 'Elaine W. Cook',
            'subtitle' => 'Sr. Team Leader',
            'number' => '65/H',
            'years' => '7 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 11,
            'img' => 'assets/img/team-11.jpg', 
            'title' => 'Raymond H. Cato',
            'subtitle' => 'UI/UX Designer',
            'number' => '50/H',
            'years' => '4 Years exp.',
            'btn' => 'Message',
            'btn1' => 'View Detail',
        ],
        [
            'id' => 12,
            'img' => 'assets/img/team-12.jpg', 
            'title' => 'Ruth W. Guzman',
            'subtitle' => 'UI/UX Designer',
            'number' => '40/H',
            'years' => '3 Years exp.',
        ],
        [
            'id' => 13,
            'img' => 'assets/img/team-13.jpg', 
            'title' => 'Shawnda J. Turner',
            'subtitle' => 'WordPress Developer',
            'number' => '35/H',
            'years' => '2 Years exp.',
        ],
        [
            'id' => 14,
            'img' => 'assets/img/team-14.jpg', 
            'title' => 'Wlaine W. Cooke',
            'subtitle' => 'PHP Developer',
            'number' => '30/H',
            'years' => '2 Years exp.',
        ],
        [
            'id' => 15,
            'img' => 'assets/img/team-15.jpg', 
            'title' => 'Jean H. Meyer',
            'subtitle' => 'Front-End Designer',
            'number' => '45/H',
            'years' => '5 Years exp.',
        ]
    ];

    private array $informations = [
        [
            'icon' => 'fa-solid fa-envelope-open-text', 
            'title' => 'shreethemes@gmail.com',
            'name' => 'Mail Address',
        ],
        [
            'icon' => 'fa-solid fa-phone-volume', 
            'title' => '855 606 8472',
            'name' => 'Phone No.',
        ],
        [
            'icon' => 'fa-regular fa-user', 
            'title' => 'Male',
            'name' => 'Gender',
        ],
        [
            'icon' => 'fa-solid fa-cake-candles', 
            'title' => '07 Apr 1992',
            'name' => 'Age',
        ],
        [
            'icon' => 'fa-solid fa-wallet', 
            'title' => '$750/month',
            'name' => 'Offerd Sallary',
        ],
        [
            'icon' => 'fa-solid fa-briefcase', 
            'title' => '5 Years',
            'name' => 'Experience',
        ],
        [
            'icon' => 'fa-solid fa-user-graduate', 
            'title' => 'Master Degree',
            'name' => 'Qualification',
        ],
        [
            'icon' => 'fa-solid fa-layer-group', 
            'title' => 'Fulltime, Remote, Freelance',
            'name' => 'Work Type',
        ]
    ];

    #[Route('/candidate-detail/{slug?}', name: 'app_candidate_detail')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->candidates as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('candidate-detail.html.twig', [
            'article' => $article ?? ['img' => '', 'title' => '', 'subtitle' => ''],
            'candidates' => $this->candidates,
            'informations' => $this->informations
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-._+&]+/', '-', $title), '-'));
    }
}