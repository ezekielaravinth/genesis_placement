<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TopEmployersController extends AbstractController
{
    #[Route('/top-employers', name: 'app_top_employers')]
    public function aboutUs(): Response
    {
        return $this->render('top-employers.html.twig', [
            'teams' => $this->getTeams(),
        ]);
    }

        private function getTeams(): array
    {
        return [
            [
                'img' => 'assets/img/team-1.jpg', 
                'name' => 'Shaurya Preet', 
                'title' => 'Co-Founder',
            ],
            [
                'img' => 'assets/img/team-2.jpg', 
                'name' => 'Shivangi Preet', 
                'title' => 'Content Writer',
            ],
            [
                'img' => 'assets/img/team-3.jpg', 
                'name' => 'Yash Preet', 
                'title' => 'Content Writer',
            ],
            [
                'img' => 'assets/img/team-10.jpg', 
                'name' => 'Calvin English', 
                'title' => 'CEO & Manager',
            ],
            [
                'img' => 'assets/img/team-5.jpg', 
                'name' => 'Rahul Gilkrist', 
                'title' => 'App Designer',
            ],
            [
                'img' => 'assets/img/team-6.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-7.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-8.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ]
        ];
    }



        #[Route('/job', name: 'app_job')]
    public function listStyle3(): Response
    {
        return $this->render('job.html.twig', [
            'jobs4' => $this->getJobs4(),
        ]);
    }

        private function getJobs4(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'app' => 'Tripadvisor',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'London',
                'time' => 'Full Time',
                'ago' => '1 Hours ago',
                'price' => '$80K - 90K', 
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'app' => 'Pinterest',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'USA',
                'time' => 'Part Time',
                'ago' => '10 Hours ago',
                'price' => '$90K - 100K',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'app' => 'Shopify',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'Canada',
                'time' => 'Enternship',
                'ago' => '1 Days ago',
                'price' => '$75K - 90K',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'app' => 'Dreezoo',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'Canada',
                'time' => 'Full Time',
                'ago' => '1 Days ago',
                'price' => '$65K - 80K',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'app' => 'Photoshop',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'New York',
                'time' => 'Part Time',
                'ago' => '2 Days ago',
                'price' => '$95K - 120K',
                'tag1' => false,
                'name' => 'Urgent',
                'class' => 'urgent',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'app' => 'Firefox',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'Denver',
                'time' => 'Freelance',
                'ago' => '2 Days ago',
                'price' => '$90K - 110K',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'app' => 'Airbnb',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'London',
                'time' => 'Full Time',
                'ago' => '2 Days ago',
                'price' => '$60K - 80K',
                'tag1' => false,
                'name' => 'Urgent',
                'class' => 'urgent',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'app' => 'Snapchat',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'Canada',
                'time' => 'Part Time',
                'ago' => '3 Days ago',
                'price' => '$80K - 95K',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'app' => 'Tripadvisor',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'London',
                'time' => 'Full Time',
                'ago' => '1 Hours ago',
                'price' => '$80K - 90K', 
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'app' => 'Pinterest',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'USA',
                'time' => 'Part Time',
                'ago' => '10 Hours ago',
                'price' => '$90K - 100K',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 11,
                'img' => 'assets/img/l-11.png', 
                'title' => 'Jr. Content Writer',
                'app' => 'Shopify',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'Canada',
                'time' => 'Enternship',
                'ago' => '1 Days ago',
                'price' => '$75K - 90K',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 12,
                'img' => 'assets/img/l-12.png', 
                'title' => 'Sr. Figma Designer',
                'app' => 'Dreezoo',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'location' => 'Canada',
                'time' => 'Full Time',
                'ago' => '1 Days ago',
                'price' => '$65K - 80K',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ]
        ];
    }

        #[Route('/top_employers_details/{slug?}', name: 'app_top_employers_details')]
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

        return $this->render('top-employers-details.html.twig', [
            'article' => $article ?? ['img' => '', 'title' => '', 'subtitle' => ''],
            'candidates' => $this->candidates,
            'informations' => $this->informations
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-._+&]+/', '-', $title), '-'));
    }

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

        #[Route('/viewall-employers', name: 'app_all_employers')]
    public function viewall(): Response
    {
        return $this->render('viewall-empolyers.html.twig', [
            'teams' => $this->getTeamsall(),
        ]);
    }

        private function getTeamsall(): array
    {
        return [
            [
                'img' => 'assets/img/team-1.jpg', 
                'name' => 'Shaurya Preet', 
                'title' => 'Data Scientist',
            ],
            [
                'img' => 'assets/img/team-2.jpg', 
                'name' => 'Shivangi Preet', 
                'title' => 'Content Writer',
            ],
            [
                'img' => 'assets/img/team-3.jpg', 
                'name' => 'Yash Preet', 
                'title' => 'Content Writer',
            ],
            [
                'img' => 'assets/img/team-10.jpg', 
                'name' => 'Calvin English', 
                'title' => 'UI/UX Designer',
            ],
            [
                'img' => 'assets/img/team-5.jpg', 
                'name' => 'Rahul Gilkrist', 
                'title' => 'App Designer',
            ],
            [
                'img' => 'assets/img/team-6.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-7.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-8.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-9.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-11.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-12.jpg', 
                'name' => 'Adam Wilcard', 
                'title' => 'Web Developer',
            ],
            [
                'img' => 'assets/img/team-14.jpg', 
                'name' => 'Rahul Gilkrist', 
                'title' => 'App Designer',
            ],
        ];
    }



}