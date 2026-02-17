<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class JobController extends AbstractController
{
    private array $jobs = [
        [
            'id' => 1,
            'img' => 'assets/img/l-1.png', 
            'title' => 'Jr. PHP Developer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$5K - $8K', 
            'open' => '6 Open', 
            'tag' => 'Enternship',
            'style' => 'enternship',
            'tag1' => true,
            'name' => '',
            'class' => '',
        ],
        [
            'id' => 2,
            'img' => 'assets/img/l-2.png', 
            'title' => 'Exp. Project manager',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$6K - $10K', 
            'open' => '4 Open', 
            'tag' => 'Freelancer',
            'style' => 'freelanc',
            'tag1' => false,
            'name' => 'Urgent',
            'class' => 'urgent',
        ],
        [
            'id' => 3,
            'img' => 'assets/img/l-3.png', 
            'title' => 'Sr. WordPress Developer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$5K - $8K', 
            'open' => '3 Open', 
            'tag' => 'Part Time',
            'style' => 'part-time',
            'tag1' => true,
            'name' => '',
            'class' => '',
        ],
        [
            'id' => 4,
            'img' => 'assets/img/l-4.png', 
            'title' => 'Jr. Laravel Developer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$4.2K - $6K', 
            'open' => '2 Open', 
            'tag' => 'Full Time',
            'style' => 'full-time',
            'tag1' => false,
            'name' => 'Featured',
            'class' => 'featured-text',
        ],
        [
            'id' => 5,
            'img' => 'assets/img/l-5.png', 
            'title' => 'Sr. UI-UX Designer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$4K - $5.5K', 
            'open' => '5 Open', 
            'tag' => 'Freelancer',
            'style' => 'freelanc',
            'tag1' => false,
            'name' => 'Urgent',
            'class' => 'urgent',
        ],
        [
            'id' => 6,
            'img' => 'assets/img/l-6.png', 
            'title' => 'Java & Python Developer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$2K - $4K', 
            'open' => '4 Open', 
            'tag' => 'Part Time',
            'style' => 'part-time',
            'tag1' => true,
            'name' => '',
            'class' => '',
        ],
        [
            'id' => 7,
            'img' => 'assets/img/l-7.png', 
            'title' => 'Sr. CodeIgniter Developer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$5K - $6K', 
            'open' => '3 Open', 
            'tag' => 'FullTime',
            'style' => 'full-time',
            'tag1' => false,
            'name' => 'Urgent',
            'class' => 'urgent',
        ],
        [
            'id' => 8,
            'img' => 'assets/img/l-8.png', 
            'title' => 'Sr. Magento Developer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$3.2K - $5K', 
            'open' => '5 Open', 
            'tag' => 'Enternship',
            'style' => 'enternship',
            'tag1' => false,
            'name' => 'Featured',
            'class' => 'featured-text',
        ],
        [
            'id' => 9,
            'img' => 'assets/img/l-9.png', 
            'title' => 'Technical Content Writer',
            'app' => 'Dribbble',
            'location' => 'New York, USA',
            'price' => '$85K - 90K', 
            'btn' => 'Quick Apply', 
            'tag' => 'Freelancer',
            'style' => 'freelanc',
            'tag1' => false,
            'name' => 'Featured',
            'class' => 'featured-text',
        ],
        [
            'id' => 10,
            'img' => 'assets/img/l-10.png', 
            'title' => 'Front-end Developer',
            'app' => 'Skype',
            'location' => 'Denver, USA',
            'price' => '$70K - 95K', 
            'btn' => 'Quick Apply', 
            'tag' => 'Full Time',
            'style' => 'full-time',
            'tag1' => true,
            'name' => '',
            'class' => '',
        ],
        [
            'id' => 11,
            'img' => 'assets/img/l-11.png', 
            'title' => 'Jr. Content Writer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$4K - $5.5K', 
            'open' => '2 Open', 
            'tag' => 'Part Time',
            'style' => 'part-time',
            'tag1' => false,
            'name' => 'Urgent',
            'class' => 'urgent',
        ],
        [
            'id' => 12,
            'img' => 'assets/img/l-12.png', 
            'title' => 'Sr. Figma Designer',
            'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
            'price' => '$6K - $8K', 
            'open' => '3 Open', 
            'tag' => 'Full Time',
            'style' => 'full-time',
            'tag1' => true,
            'name' => '',
            'class' => '',
        ]
    ];

    private array $infos = [
        [
            'title' => 'Company Founder:',
            'name' => 'Mr. Daniel Mark',
        ],
        [
            'title' => 'Industry:',
            'name' => 'Technology',
        ],
        [
            'title' => 'Founded:',
            'name' => '1997',
        ],
        [
            'title' => 'Head Office:',
            'name' => 'London, UK',
        ],
        [
            'title' => 'Revenue',
            'name' => '$70B+',
        ],
        [
            'title' => 'Company Size:',
            'name' => '20,000+ Emp.',
        ],
        [
            'title' => 'Min Exp.',
            'name' => '02 Years',
        ],
        [
            'title' => 'Openings',
            'name' => '06 Openings',
        ]
    ];

    #[Route('/job-detail/{slug?}', name: 'app_job_detail')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->jobs as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('job-detail.html.twig', [
            'article' => $article ?? ['title' => '', 'price' => ''],
            'jobs' => $this->jobs,
            'infos' => $this->infos
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-._+&]+/', '-', $title), '-'));
    }
}