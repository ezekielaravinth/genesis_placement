<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    private function getCtrs(): array
    {
        return [
            [
                'title' => 'Years of Market Leadership',
                'price' => '21',
                'symbol' => '+',
            ],
            [
                'title' => 'Careers made till date',
                'price' => '1.35',
                'symbol' => 'K',
            ],
            [
                'title' => 'industries covered',
                'price' => '18',
                'symbol' => '',
            ]
        ];
    }

    private function getCompanies(): array
    {
        return [
            [
                'img' => 'assets/img/brand/layar-primary.svg', 
            ],
            [
                'img' => 'assets/img/brand/mailchimp-primary.svg', 
            ],
            [
                'img' => 'assets/img/brand/fitbit-primary.svg', 
            ],
            [
                'img' => 'assets/img/brand/capsule-primary.svg', 
            ],
            [
                'img' => 'assets/img/brand/vidados-primary.svg', 
            ]
        ];
    }

    private function getJobs(): array
    {
        return [
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
            ]
        ];
    }

    private function getCategories(): array
    {
        return [
            [
                'icon' => 'fa-solid fa-file-invoice',
                'title' => 'Accounting & Finance',
                'jobs' => '122 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-caravan',
                'title' => 'Automotive Jobs',
                'jobs' => '78 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-person-chalkboard',
                'title' => 'Business & Tech',
                'jobs' => '25 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-user-graduate',
                'title' => 'Education Training',
                'jobs' => '212 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-briefcase-medical',
                'title' => 'Healthcare',
                'jobs' => '90 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-burger',
                'title' => 'Restaurant & Food',
                'jobs' => '65 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-jet-fighter',
                'title' => 'Transportation',
                'jobs' => '160 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen-button',
                'title' => 'Telecommunications',
                'jobs' => '80 Active Jobs',
            ]
        ];
    }

    private function getReviews(): array
    {
        return [
            [
                'img' => 'assets/img/team-1.jpg',
                'name' => 'Lucia E. Nugent',
                'tag' => 'CEO of Climber',
                'title' => '"The best useful website"',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',
            ],
            [
                'img' => 'assets/img/team-2.jpg',
                'name' => 'Brenda R. Smith',
                'tag' => 'Founder of Yeloower',
                'title' => '"Ranking is the #1"',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',
            ],
            [
                'img' => 'assets/img/team-3.jpg',
                'name' => 'Brian B. Wilkerson',
                'tag' => 'CEO of Mark Soft',
                'title' => '"The website is eco friendly"',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',
            ],
            [
                'img' => 'assets/img/team-4.jpg',
                'name' => 'Miguel L. Benbow',
                'tag' => 'Founder of Mitche LTD',
                'title' => '"100% save and secure website"',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',
            ],
            [
                'img' => 'assets/img/team-5.jpg',
                'name' => 'Hilda A. Sheppard',
                'tag' => 'CEO of Doodle',
                'title' => '"Very developer friendly website"',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',
            ]
        ];
    }

    private function getCompanies2(): array
    {
        return [
            [
                'img' => 'assets/img/brand/layar-white.svg', 
            ],
            [
                'img' => 'assets/img/brand/mailchimp-white.svg', 
            ],
            [
                'img' => 'assets/img/brand/forbes-white.svg', 
            ],
            [
                'img' => 'assets/img/brand/fitbit-white.svg', 
            ],
            [
                'img' => 'assets/img/brand/vidados-white.svg', 
            ]
        ];
    }

    private function getJobs2(): array
    {
        return [
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'app' => 'Shopify',
                'location' => 'London, UK',
                'price' => '$80K - 110K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'app' => 'Deezroo',
                'location' => 'Canada, USA',
                'price' => '$50K - 70K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Enternship',
                'style' => 'enternship',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'app' => 'Photoshop',
                'location' => 'Denver, USA',
                'price' => '$80K - 90K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Part Time',
                'style' => 'part-time',
                'tag1' => false,
                'name' => 'Urgent',
                'class' => 'urgent',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'app' => 'Firefox',
                'location' => 'California, USA',
                'price' => '$90K - 100K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Part Time',
                'style' => 'part-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'app' => 'Air BNB',
                'location' => 'Canada, USA',
                'price' => '$80K - 110K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'app' => 'Snapchat',
                'location' => 'London, UK',
                'price' => '$60K - 90K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Enternship',
                'style' => 'enternship',
                'tag1' => false,
                'name' => 'Urgent',
                'class' => 'urgent',
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
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'app' => 'Deezroo',
                'location' => 'Canada, USA',
                'price' => '$50K - 70K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Enternship',
                'style' => 'enternship',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'app' => 'Shopify',
                'location' => 'London, UK',
                'price' => '$80K - 110K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
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
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'app' => 'Skype',
                'location' => 'Denver, USA',
                'price' => '$70K - 95K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ]
        ];
    }

    private function getNeeds(): array
    {
        return [
            [
                'number' => '01.',
                'title' => 'Executive Search ',
                'desc' => "At GENESIS, we have a team of expert HR consultants who identify, interview, screen and present the best suited talent for the employers and makes the complete hiring process simple and easy. We offer recruitment across India.",
            ],
            [
                'number' => '02.',
                'title' => 'Database Selection',
                'desc' => "
Genesis Placement Services has a large database consisting of more than 50,000 live and  professional data from various categories and industries. Scrutinizing and screening of the resume is done through specially designed oracle base software and is fully automated and has accuracy in screening the right talent.
",
            ],
            [
                'number' => '03.',
                'title' => 'Head Hunting & References',
                'desc' => "enesis Placement Services uses this as the  most powerful tool in our searching process. We have a team of expert recruiters who are highly experienced & technically qualified, who study in depth about client, their products, working process, technical aspects, competitors industries.  Genesis Placement Services maintains strong relationship with candidates and while headhunting and source the right talent as per client specification",
            ],
             [
                'number' => '04.',
                'title' => 'Advertisement & Responses',
                'desc' => "
Our third option is, advertisement & response to hunt specific talent. We release advertisements on various job portals, news papers & other sources. It is one of the effective tool for hunting the right talent.
",
            ],
              [
                'number' => '05.',
                'title' => 'Other Sources',
                'desc' => "
We search candidates through our existing network, references, free lancers & various job portals with a main aim to spot the right talent as per client specification within the deadline.
",
            ],
        ];
    }

    private function getExplores(): array
    {
        return [
            [
                'img' => 'assets/img/c-1.png',
                'title' => 'California, USA',
                'jobs' => '307+ Jobs',
            ],
            [
                'img' => 'assets/img/c-2.png',
                'title' => 'Denver City, USA',
                'jobs' => '102+ Jobs',
            ],
            [
                'img' => 'assets/img/c-3.png',
                'title' => 'Washington, USA',
                'jobs' => '200+ Jobs',
            ],
            [
                'img' => 'assets/img/c-4.png',
                'title' => 'Liverpool, UK',
                'jobs' => '150+ Jobs',
            ]
        ];
    }

    private function getCandidates(): array
    {
        return [
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
    }

    private function getJobs3(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '5 Years exp.', 
                'price' => '$370',
                'date' => '6 Sep 2025',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '3 Years exp.', 
                'price' => '$250',
                'date' => '10 Jan 2026',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'years' => '2 Years exp.', 
                'price' => '$270',
                'date' => '5 Jan 2026',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'years' => '4 Years exp.', 
                'price' => '$350',
                'date' => '15 Jan 2026',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'location' => 'California', 
                'time' => 'Part Time', 
                'years' => '4 Years exp.', 
                'price' => '$300',
                'date' => '26 Jan 2026',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'location' => 'Canada', 
                'time' => 'Enternship', 
                'years' => '2 Years exp.', 
                'price' => '$290',
                'date' => '30 Jan 2026',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'location' => 'London', 
                'time' => 'Part Time', 
                'years' => '1 Years exp.', 
                'price' => '$180',
                'date' => '02 Feb 2026',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'location' => 'London', 
                'time' => 'Freelance', 
                'years' => '2 Years exp.', 
                'price' => '$250',
                'date' => '10 Feb 2026',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '5 Years exp.', 
                'price' => '$370',
                'date' => '6 Sep 2025',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '3 Years exp.', 
                'price' => '$250',
                'date' => '10 Jan 2026',
            ],
            [
                'id' => 11,
                'img' => 'assets/img/l-11.png', 
                'title' => 'Jr. Content Writer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'years' => '2 Years exp.', 
                'price' => '$270',
                'date' => '5 Jan 2026',
            ],
            [
                'id' => 12,
                'img' => 'assets/img/l-12.png', 
                'title' => 'Sr. Figma Designer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'years' => '4 Years exp.', 
                'price' => '$350',
                'date' => '15 Jan 2026',
            ]
        ];
    }

    private function getEmployers(): array
    {
        return [
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

    private function getBlogs(): array
    {
        return [
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
    }

    private function getCategories2(): array
    {
        return [
            [
                'icon' => 'fa-solid fa-file-invoice',
                'title' => 'Accounting & Finance',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '122 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-caravan',
                'title' => 'Automotive Jobs',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '78 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-person-chalkboard',
                'title' => 'Business & Tech',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '25 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-user-graduate',
                'title' => 'Education Training',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '212 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-briefcase-medical',
                'title' => 'Healthcare',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '90 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-burger',
                'title' => 'Restaurant & Food',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '65 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-jet-fighter',
                'title' => 'Transportation',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '160 Active Jobs',
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen-button',
                'title' => 'Telecommunications',
                'desc' => 'You can view all popular jobs according your future careers.',
                'jobs' => '80 Active Jobs',
            ]
        ];
    }

    private function getCtrs2(): array
    {
        return [
            [
                'title' => 'Success in finding jobs on JobStock Platform',
                'number' => '97',
                'symbol' => '%',
            ],
            [
                'title' => 'Potential increase traffice rather than JobStock website.',
                'number' => '68',
                'symbol' => 'X',
            ],
            [
                'title' => 'Thousands of companies work with us with partnership',
                'number' => '25',
                'symbol' => 'K',
            ],
            [
                'title' => 'Happy customers in all over world with our services',
                'number' => '25',
                'symbol' => 'K',
            ]
        ];
    }

    private function getClients(): array
    {
        return [
            [
                'name' => 'Chad B. Werner',
                'title' => 'Web Designer',
                'desc' => 'The wise man therefore always circumstances and owing to the claims of duty or the obligations holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
                'class' => 'show active',
                'id' => 'pills-track-1',
                'labelledby' => 'pills-track-1-tab',
            ],
            [
                'name' => 'Melvin D. Fowler',
                'title' => 'Team Manager',
                'desc' => 'The wise man therefore always circumstances and owing to the claims of duty or the obligations holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
                'class' => '',
                'id' => 'pills-track-2',
                'labelledby' => 'pills-track-2-tab',
            ],
            [
                'name' => 'Chad B. Werner',
                'title' => 'Web Designer',
                'desc' => 'The wise man therefore always circumstances and owing to the claims of duty or the obligations holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
                'class' => '',
                'id' => 'pills-track-3',
                'labelledby' => 'pills-track-3-tab',
            ],
            [
                'name' => 'Sylvester B. Blevins',
                'title' => 'WordPress Developer',
                'desc' => 'The wise man therefore always circumstances and owing to the claims of duty or the obligations holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
                'class' => '',
                'id' => 'pills-track-4',
                'labelledby' => 'pills-track-4-tab',
            ],
            [
                'name' => 'Jacob R. Haynes',
                'title' => 'Sr. PHP Developer',
                'desc' => 'The wise man therefore always circumstances and owing to the claims of duty or the obligations holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
                'class' => '',
                'id' => 'pills-track-5',
                'labelledby' => 'pills-track-5-tab',
            ]
        ];
    }

    private function getTablists(): array
    {
        return [
            [
                'img' => 'assets/img/team-1.jpg',
                'class' => 'active',
                'id' => 'pills-track-1-tab',
                'target' => '#pills-track-1',
                'controls' => 'pills-track-1',
                'selected' => 'true',
            ],
            [
                'img' => 'assets/img/team-2.jpg',
                'class' => '',
                'id' => 'pills-track-2-tab',
                'target' => '#pills-track-2',
                'controls' => 'pills-track-2',
                'selected' => 'false',
            ],
            [
                'img' => 'assets/img/team-3.jpg',
                'class' => '',
                'id' => 'pills-track-3-tab',
                'target' => '#pills-track-3',
                'controls' => 'pills-track-3',
                'selected' => 'false',
            ],
            [
                'img' => 'assets/img/team-5.jpg',
                'class' => '',
                'id' => 'pills-track-4-tab',
                'target' => '#pills-track-4',
                'controls' => 'pills-track-4',
                'selected' => 'false',
            ],
            [
                'img' => 'assets/img/team-6.jpg',
                'class' => '',
                'id' => 'pills-track-5-tab',
                'target' => '#pills-track-5',
                'controls' => 'pills-track-5',
                'selected' => 'false',
            ]
        ];
    }

    private function getJobs5(): array
    {
        return [
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
                'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
                'price' => '$85K - 90K', 
                'open' => '1 Open', 
                'tag' => 'Part Time',
                'style' => 'part-time',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
                'price' => '$70K - 95K', 
                'open' => '4 Open', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
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
            ],
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
            ]
        ];
    }

    private function getJobs6(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'app' => 'Tripadvisor',
                'desc' => 'Consistently create well-designed, tested code using best practices for website development, including mobile...',
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
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
                'year' => '1-2 Year',
                'time' => 'Full Time',
                'location' => 'London',
                'price' => '$370',
                'date' => '6 Sep 2025',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ]
        ];
    }

    private function getJobs7(): array
    {
        return [
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
                'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
                'price' => '$85K - 90K', 
                'open' => '1 Open', 
                'tag' => 'Part Time',
                'style' => 'part-time',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
                'price' => '$70K - 95K', 
                'open' => '4 Open', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
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
            ],
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
                'desc' => 'CSS3, HTML5, Javascript, Bootstrap, Jquery',
                'price' => '$85K - 90K', 
                'open' => '1 Open', 
                'tag' => 'Part Time',
                'style' => 'part-time',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ]
        ];
    }

    private function getJobs8(): array
    {
        return [
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'app' => 'Shopify',
                'location' => 'London, UK',
                'price' => '$80K - 110K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'app' => 'Deezroo',
                'location' => 'Canada, USA',
                'price' => '$50K - 70K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Enternship',
                'style' => 'enternship',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'app' => 'Deezroo',
                'location' => 'Canada, USA',
                'price' => '$50K - 70K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Enternship',
                'style' => 'enternship',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'app' => 'Shopify',
                'location' => 'London, UK',
                'price' => '$80K - 110K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
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
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
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
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'app' => 'Photoshop',
                'location' => 'Denver, USA',
                'price' => '$80K - 90K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Part Time',
                'style' => 'part-time',
                'tag1' => false,
                'name' => 'Urgent',
                'class' => 'urgent',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'app' => 'Firefox',
                'location' => 'California, USA',
                'price' => '$90K - 100K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Part Time',
                'style' => 'part-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'app' => 'Air BNB',
                'location' => 'Canada, USA',
                'price' => '$80K - 110K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'app' => 'Snapchat',
                'location' => 'London, UK',
                'price' => '$60K - 90K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Enternship',
                'style' => 'enternship',
                'tag1' => false,
                'name' => 'Urgent',
                'class' => 'urgent',
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
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'app' => 'Deezroo',
                'location' => 'Canada, USA',
                'price' => '$50K - 70K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Enternship',
                'style' => 'enternship',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'app' => 'Shopify',
                'location' => 'London, UK',
                'price' => '$80K - 110K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => false,
                'name' => 'Featured',
                'class' => 'featured-text',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
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
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'app' => 'Skype',
                'location' => 'Denver, USA',
                'price' => '$70K - 95K', 
                'btn' => 'Quick Apply', 
                'tag' => 'Full Time',
                'style' => 'full-time',
                'tag1' => true,
                'name' => '',
                'class' => '',
            ]
        ];
    }

    private function getJobs9(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '5 Years exp.', 
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '3 Years exp.', 
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'years' => '2 Years exp.', 
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'years' => '4 Years exp.', 
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'location' => 'California', 
                'time' => 'Part Time', 
                'years' => '4 Years exp.', 
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'location' => 'Canada', 
                'time' => 'Enternship', 
                'years' => '2 Years exp.', 
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'location' => 'London', 
                'time' => 'Part Time', 
                'years' => '1 Years exp.', 
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'location' => 'London', 
                'time' => 'Freelance', 
                'years' => '2 Years exp.', 
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '5 Years exp.', 
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '3 Years exp.', 
            ]
        ];
    }

    private function getJobs10(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'location' => 'California', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'location' => 'Canada', 
                'time' => 'Enternship', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'location' => 'London', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'location' => 'London', 
                'time' => 'Freelance', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'price' => '$85K - 95K',
            ]
        ];
    }

    private function getInformations(): array
    {
        return [
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
    }

    private function getJobs11(): array
    {
        return [
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'location' => 'London', 
                'time' => 'Part Time', 
                'years' => '$400', 
                'ago' => '05 Days ago',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'location' => 'London', 
                'time' => 'Freelance', 
                'years' => '$320', 
                'ago' => '05 Days ago',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '$400', 
                'ago' => '07 Days ago',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '$350', 
                'ago' => '08 Days ago',
            ],
            [
                'id' => 11,
                'img' => 'assets/img/l-11.png', 
                'title' => 'Jr. Content Writer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'years' => '$290', 
                'ago' => '10 Days ago',
            ],
            [
                'id' => 12,
                'img' => 'assets/img/l-12.png', 
                'title' => 'Sr. Figma Designer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'years' => '$250', 
                'ago' => '15 Days ago',
            ],
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '$370', 
                'ago' => '07 Days ago',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '$370', 
                'ago' => '10 min ago',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'years' => '$300', 
                'ago' => '2 Hours ago',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'years' => '$290', 
                'ago' => '5 Hours ago',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'location' => 'California', 
                'time' => 'Part Time', 
                'years' => '$310', 
                'ago' => '10 Hours ago',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'location' => 'Canada', 
                'time' => 'Enternship', 
                'years' => '$450', 
                'ago' => '02 Days ago',
            ]
        ];
    }

    private function getJobs12(): array
    {
        return [
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'location' => 'California', 
                'time' => 'Part Time', 
                'years' => '$310', 
                'ago' => '10 Hours ago',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'location' => 'Canada', 
                'time' => 'Enternship', 
                'years' => '$450', 
                'ago' => '02 Days ago',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'location' => 'London', 
                'time' => 'Part Time', 
                'years' => '$400', 
                'ago' => '05 Days ago',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'location' => 'London', 
                'time' => 'Freelance', 
                'years' => '$320', 
                'ago' => '05 Days ago',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '$400', 
                'ago' => '07 Days ago',
            ],
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'years' => '$370', 
                'ago' => '07 Days ago',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '$370', 
                'ago' => '10 min ago',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'years' => '$300', 
                'ago' => '2 Hours ago',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'years' => '$290', 
                'ago' => '5 Hours ago',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'years' => '$350', 
                'ago' => '08 Days ago',
            ],
            [
                'id' => 11,
                'img' => 'assets/img/l-11.png', 
                'title' => 'Jr. Content Writer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'years' => '$290', 
                'ago' => '10 Days ago',
            ],
            [
                'id' => 12,
                'img' => 'assets/img/l-12.png', 
                'title' => 'Sr. Figma Designer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'years' => '$250', 
                'ago' => '15 Days ago',
            ]
        ];
    }

    private function getCtrs3(): array
    {
        return [
            [
                'icon' => 'fa-solid fa-business-time', 
                'class' => 'success',
                'title' => 'Applied jobs',
                'number' => '523',
            ],
            [
                'icon' => 'fa-solid fa-bookmark', 
                'class' => 'warning',
                'title' => 'Saved Jobs',
                'number' => '523',
            ],
            [
                'icon' => 'fa-solid fa-eye', 
                'class' => 'danger',
                'title' => 'Viewed Jobs',
                'number' => '523',
            ],
            [
                'icon' => 'fa-sharp fa-solid fa-comments', 
                'class' => 'info',
                'title' => 'Total Review',
                'number' => '523',
            ]
        ];
    }

    private function getJobs13(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Approved',
                'class' => 'success',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Pending',
                'class' => 'warning',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Approved',
                'class' => 'success',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Pending',
                'class' => 'warning',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'location' => 'California', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Approved',
                'class' => 'success',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'location' => 'Canada', 
                'time' => 'Enternship', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Approved',
                'class' => 'success',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'location' => 'London', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Pending',
                'class' => 'warning',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'location' => 'London', 
                'time' => 'Freelance', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Approved',
                'class' => 'success',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Pending',
                'class' => 'warning',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => 'Apply 02 Jun 2025',
                'btn' => 'Pending',
                'class' => 'warning',
            ]
        ];
    }

    private function getJobs14(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Active',
                'class' => 'success',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Expired',
                'class' => 'danger',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'location' => 'London', 
                'time' => 'Enternship', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Active',
                'class' => 'success',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'location' => 'New York', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Expired',
                'class' => 'danger',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'location' => 'California', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Active',
                'class' => 'success',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'location' => 'Canada', 
                'time' => 'Enternship', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Active',
                'class' => 'success',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'location' => 'London', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Expired',
                'class' => 'danger',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'location' => 'London', 
                'time' => 'Freelance', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Active',
                'class' => 'success',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'location' => 'London', 
                'time' => 'Full Time', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Expired',
                'class' => 'danger',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'location' => 'Canada', 
                'time' => 'Part Time', 
                'date' => '06 Sep 2025', 
                'apply' => '27 Applied',
                'btn' => 'Expired',
                'class' => 'danger',
            ]
        ];
    }

    private function getEmployers2(): array
    {
        return [
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
            ]
        ];
    }

    private function getAwards(): array
    {
        return [
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
    }

    private function getViews(): array
    {
        return [
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
    }

    private function getCtrs4(): array
    {
        return [
            [
                'icon' => 'fa-solid fa-business-time', 
                'class' => 'success', 
                'number' => '760',
                'title' => 'Posted jobs',
            ],
            [
                'icon' => 'fa-solid fa-bookmark', 
                'class' => 'warning', 
                'number' => '12560',
                'title' => 'Saved Candidates',
            ],
            [
                'icon' => 'fa-solid fa-user-clock', 
                'class' => 'danger', 
                'number' => '672',
                'title' => 'Applicants',
            ],
            [
                'icon' => 'fa-sharp fa-solid fa-comments', 
                'class' => 'info', 
                'number' => '215',
                'title' => 'Total Review',
            ]
        ];
    }

    private function getPosteds(): array
    {
        return [
            [
                'id' => 1,
                'img' => 'assets/img/l-1.png', 
                'title' => 'Jr. PHP Developer',
                'name' => 'Tripadvisor', 
                'applicants' => '244 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026', 
            ],
            [
                'id' => 2,
                'img' => 'assets/img/l-2.png', 
                'title' => 'Exp. Project manager',
                'name' => 'Pinterest', 
                'applicants' => '110 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/l-3.png', 
                'title' => 'Sr. WordPress Developer',
                'name' => 'Shopify', 
                'applicants' => '320 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/l-4.png', 
                'title' => 'Jr. Laravel Developer',
                'name' => 'Dreezoo', 
                'applicants' => '170 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/l-5.png', 
                'title' => 'Sr. UI-UX Designer',
                'name' => 'Snapchat', 
                'applicants' => '190 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/l-6.png', 
                'title' => 'Java & Python Developer',
                'name' => 'Photoshop', 
                'applicants' => 'Expired', 
                'class' => 'red', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 7,
                'img' => 'assets/img/l-7.png', 
                'title' => 'Sr. CodeIgniter Developer',
                'name' => 'Firefox', 
                'applicants' => '205 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/l-8.png', 
                'title' => 'Sr. Magento Developer',
                'name' => 'Airbnb', 
                'applicants' => '320 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 9,
                'img' => 'assets/img/l-9.png', 
                'title' => 'Technical Content Writer',
                'name' => 'Tripadvisor', 
                'applicants' => 'Expired', 
                'class' => 'red', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ],
            [
                'id' => 10,
                'img' => 'assets/img/l-10.png', 
                'title' => 'Front-end Developer',
                'name' => 'Pinterest', 
                'applicants' => '150 Applicants', 
                'class' => 'green', 
                'posted' => '17 Apr 2025', 
                'expired' => '12 Jun 2026',
            ]
        ];
    }

    private function getTables(): array
    {
        return [
            [
                'number' => '01',
                'id' => '1274',
                'name' => 'Basic',
                'type' => 'Job Package',
                'featured' => 'Yes',
                'urgent' => 'Yes',
                'posted' => '04',
                'limit' => '20',
                'duration' => '30',
                'title' => 'Active',
                'class' => 'success',
            ],
            [
                'number' => '02',
                'id' => '1285',
                'name' => 'Standard',
                'type' => 'Job Package',
                'featured' => 'Yes',
                'urgent' => 'Yes',
                'posted' => '02',
                'limit' => '25',
                'duration' => '40',
                'title' => 'Expired',
                'class' => 'danger',
            ],
            [
                'number' => '03',
                'id' => '1274',
                'name' => 'Platinum',
                'type' => 'Job Package',
                'featured' => 'Yes',
                'urgent' => 'Yes',
                'posted' => '10',
                'limit' => '40',
                'duration' => '75',
                'title' => 'Active',
                'class' => 'success',
            ],
            [
                'number' => '04',
                'id' => '6254',
                'name' => 'Standard',
                'type' => 'Job Package',
                'featured' => 'Yes',
                'urgent' => 'Yes',
                'posted' => '07',
                'limit' => '10',
                'duration' => '15',
                'title' => 'Active',
                'class' => 'success',
            ],
            [
                'number' => '05',
                'id' => '3256',
                'name' => 'Basic',
                'type' => 'Job Package',
                'featured' => 'Yes',
                'urgent' => 'Yes',
                'posted' => '04',
                'limit' => '20',
                'duration' => '30',
                'title' => 'Expired',
                'class' => 'danger',
            ],
            [
                'number' => '06',
                'id' => '4215',
                'name' => 'Basic',
                'type' => 'Job Package',
                'featured' => 'Yes',
                'urgent' => 'Yes',
                'posted' => '04',
                'limit' => '20',
                'duration' => '30',
                'title' => 'Active',
                'class' => 'success',
            ],
            [
                'number' => '07',
                'id' => '6254',
                'name' => 'Platinum',
                'type' => 'Job Package',
                'featured' => 'Yes',
                'urgent' => 'Yes',
                'posted' => '04',
                'limit' => '20',
                'duration' => '30',
                'title' => 'Active',
                'class' => 'success',
            ]
        ];
    }

    private function getTeams(): array
    {
        return [
            [
                'img' => 'assets/img/team-1.jpg', 
                'name' => 'Mrudula John  ', 
                'title' => 'Consultant',
                'desc' => 'I enjoy doing a little bit of everything in HR from the day to day operations to partnering with the company’s greatest asset, the employee. My greatest satisfaction is having a positive impact on the lifecycle of the employee.',
            ],
            [
                'img' => 'assets/img/team-2.jpg', 
                'name' => 'Saritha Sunderraj', 
                'title' => 'Senior Consultant',
                'desc' => 'I am passionate about people and helping to make teams more successful. I truly enjoy coming up with creative solutions to problems and helping to build a positive culture for companies. I absolutely love that I have the opportunity to make peoples working lives better.',
            ]
            
        ];
    }

    private function getButtons(): array
    {
        return [
            [
                'class' => 'main',
                'title' => 'Main',
            ],
            [
                'class' => 'secondary',
                'title' => 'Secondary',
            ],
            [
                'class' => 'success',
                'title' => 'Success',
            ],
            [
                'class' => 'danger',
                'title' => 'Danger',
            ],
            [
                'class' => 'warning',
                'title' => 'Warning',
            ],
            [
                'class' => 'info',
                'title' => 'Info',
            ],
            [
                'class' => 'light',
                'title' => 'Light',
            ],
            [
                'class' => 'dark',
                'title' => 'Dark',
            ],
            [
                'class' => 'red',
                'title' => 'Red',
            ],
            [
                'class' => 'green',
                'title' => 'Green',
            ],
            [
                'class' => 'light-main',
                'title' => 'Light Main',
            ],
            [
                'class' => 'light-red',
                'title' => 'Light Red',
            ],
            [
                'class' => 'light-green',
                'title' => 'Light Green',
            ],
            [
                'class' => 'outline-main',
                'title' => 'Outline Main',
            ],
            [
                'class' => 'outline-red',
                'title' => 'Outline Red',
            ],
            [
                'class' => 'outline-green',
                'title' => 'Outline Green',
            ],
            [
                'class' => 'outline-dark',
                'title' => 'Outline Dark',
            ],
            [
                'class' => 'outline-dark rounded-pill',
                'title' => 'Outline Dark Rounded',
            ]
        ];
    }

    private function getAlerts(): array
    {
        return [
            [
                'title' => 'main',
            ],
            [
                'title' => 'secondary',
            ],
            [
                'title' => 'success',
            ],
            [
                'title' => 'danger',
            ],
            [
                'title' => 'warning',
            ],
            [
                'title' => 'info',
            ],
            [
                'title' => 'light',
            ],
            [
                'title' => 'dark',
            ]
        ];
    }

    private function getLinks(): array
    {
        return [
            [
                'title' => 'main',
            ],
            [
                'title' => 'secondary',
            ],
            [
                'title' => 'success',
            ],
            [
                'title' => 'danger',
            ],
            [
                'title' => 'warning',
            ],
            [
                'title' => 'info',
            ],
            [
                'title' => 'light',
            ],
            [
                'title' => 'dark',
            ]
        ];
    }

    private function getBadges(): array
    {
        return [
            [
                'class' => 'bg-main',
                'title' => 'Main',
            ],
            [
                'class' => 'text-bg-secondary',
                'title' => 'Secondary',
            ],
            [
                'class' => 'text-bg-success',
                'title' => 'Success',
            ],
            [
                'class' => 'text-bg-danger',
                'title' => 'Danger',
            ],
            [
                'class' => 'text-bg-warning',
                'title' => 'Warning',
            ],
            [
                'class' => 'text-bg-info',
                'title' => 'Info',
            ],
            [
                'class' => 'text-bg-light',
                'title' => 'Light',
            ],
            [
                'class' => 'text-bg-dark',
                'title' => 'Dark',
            ],
            [
                'class' => 'badge-md bg-main',
                'title' => 'Main',
            ],
            [
                'class' => 'badge-md text-bg-secondary',
                'title' => 'Secondary',
            ],
            [
                'class' => 'badge-md text-bg-success',
                'title' => 'Success',
            ],
            [
                'class' => 'badge-md text-bg-danger',
                'title' => 'Danger',
            ],
            [
                'class' => 'badge-md text-bg-warning',
                'title' => 'Warning',
            ],
            [
                'class' => 'badge-md text-bg-info',
                'title' => 'Info',
            ],
            [
                'class' => 'badge-md text-bg-light',
                'title' => 'Light',
            ],
            [
                'class' => 'badge-md text-bg-dark',
                'title' => 'Dark',
            ]
        ];
    }

    private function getAvatars(): array
    {
        return [
            [
                'class' => 'square--80',
            ],
            [
                'class' => 'square--70',
            ],
            [
                'class' => 'square--50',
            ],
            [
                'class' => 'square--30',
            ],
            [
                'class' => 'square--20',
            ]
        ];
    }

    private function getSliders(): array
    {
        return [
            [
                'img' => 'assets/img/slide-banner-1.jpg', 
                'title' => 'Real Jobs, Real People, Real Success',
                'desc' => 'The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods', 
            ],
            [
                'img' => 'assets/img/slide-banner-2.jpg', 
                'title' => 'Discover Jobs. Take Action. Win Big.',
                'desc' => 'The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods', 
            ],
            [
                'img' => 'assets/img/slide-banner-3.jpg', 
                'title' => 'Find Work. Build Skills. Grow Fast.',
                'desc' => 'The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods', 
            ],
            [
                'img' => 'assets/img/slide-banner-4.jpg', 
                'title' => 'One Click Closer to Your Next Big Opportunity',
                'desc' => 'The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods', 
            ]
        ];
    }


    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'ctrs' => $this->getCtrs(),
            'companies' => $this->getCompanies(),
            'jobs' => $this->getJobs(),
            'categories' => $this->getCategories(),
            'reviews' => $this->getReviews(),
        ]);
    }

    

    #[Route('/home-2', name: 'app_home_2')]
    public function home2(): Response
    {
        return $this->render('home-2.html.twig', [
            'companies2' => $this->getCompanies2(),
            'jobs2' => $this->getJobs2(),
            'categories' => $this->getCategories(),
            'needs' => $this->getNeeds(),
            'explores' => $this->getExplores(),
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/home-3', name: 'app_home_3')]
    public function home3(): Response
    {
        return $this->render('home-3.html.twig', [
            'categories' => $this->getCategories(),
            'jobs3' => $this->getJobs3(),
            'candidates' => $this->getCandidates(),
            'needs' => $this->getNeeds(),
            'reviews' => $this->getReviews(),
        ]);
    }

    #[Route('/home-4', name: 'app_home_4')]
    public function home4(): Response
    {
        return $this->render('home-4.html.twig', [
            'companies' => $this->getCompanies(),
            'employers' => $this->getEmployers(),
            'categories' => $this->getCategories(),
            'jobs4' => $this->getJobs4(),
            'reviews' => $this->getReviews(),
        ]);
    }

    #[Route('/home-5', name: 'app_home_5')]
    public function home5(): Response
    {
        return $this->render('home-5.html.twig', [
            'categories' => $this->getCategories(),
            'needs' => $this->getNeeds(),
            'jobs' => $this->getJobs(),
            'employers' => $this->getEmployers(),
            'candidates' => $this->getCandidates(),
            'reviews' => $this->getReviews(),
        ]);
    }

    #[Route('/home-6', name: 'app_home_6')]
    public function home6(): Response
    {
        return $this->render('home-6.html.twig', [
            'jobs' => $this->getJobs(),
        ]);
    }

    #[Route('/home-7', name: 'app_home_7')]
    public function home7(): Response
    {
        return $this->render('home-7.html.twig', [
            'companies2' => $this->getCompanies2(),
            'candidates' => $this->getCandidates(),
            'explores' => $this->getExplores(),
            'jobs2' => $this->getJobs2(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/home-8', name: 'app_home_8')]
    public function home8(): Response
    {
        return $this->render('home-8.html.twig', [
            'companies2' => $this->getCompanies2(),
            'jobs' => $this->getJobs(),
            'categories2' => $this->getCategories2(),
            'reviews' => $this->getReviews(),
        ]);
    }

    #[Route('/home-9', name: 'app_home_9')]
    public function home9(): Response
    {
        return $this->render('home-9.html.twig', [
            'ctrs2' => $this->getCtrs2(),
            'categories2' => $this->getCategories2(),
            'jobs2' => $this->getJobs2(),
            'clients' => $this->getClients(),
            'tablists' => $this->getTablists(),
        ]);
    }

    #[Route('/home-10', name: 'app_home_10')]
    public function home10(): Response
    {
        return $this->render('home-10.html.twig', [
            'companies2' => $this->getCompanies2(),
            'categories' => $this->getCategories(),
            'needs' => $this->getNeeds(),
            'jobs' => $this->getJobs(),
            'employers' => $this->getEmployers(),
            'candidates' => $this->getCandidates(),
            'reviews' => $this->getReviews(),
        ]);
    }

    #[Route('/home-11', name: 'app_home_11')]
    public function home11(): Response
    {
        return $this->render('home-11.html.twig', [
            'jobs' => $this->getJobs(),
            'categories2' => $this->getCategories2(),
            'reviews' => $this->getReviews(),
        ]);
    }

    #[Route('/home-12', name: 'app_home_12')]
    public function home12(): Response
    {
        return $this->render('home-12.html.twig', [
            'companies2' => $this->getCompanies2(),
            'jobs' => $this->getJobs(),
            'categories2' => $this->getCategories2(),
            'clients' => $this->getClients(),
            'tablists' => $this->getTablists(),
        ]);
    }

    #[Route('/grid-style-1', name: 'app_grid_style_1')]
    public function gridStyle1(): Response
    {
        return $this->render('grid-style-1.html.twig', [
            'jobs5' => $this->getJobs5(),
        ]);
    }

    #[Route('/grid-style-2', name: 'app_grid_style_2')]
    public function gridStyle2(): Response
    {
        return $this->render('grid-style-2.html.twig', [
            'jobs2' => $this->getJobs2(),
        ]);
    }

    #[Route('/grid-style-3', name: 'app_grid_style_3')]
    public function gridStyle3(): Response
    {
        return $this->render('grid-style-3.html.twig', [
            'jobs3' => $this->getJobs3(),
        ]);
    }

    #[Route('/grid-style-4', name: 'app_grid_style_4')]
    public function gridStyle4(): Response
    {
        return $this->render('grid-style-4.html.twig', [
            'jobs4' => $this->getJobs4(),
        ]);
    }

    #[Route('/grid-style-5', name: 'app_grid_style_5')]
    public function gridStyle5(): Response
    {
        return $this->render('grid-style-5.html.twig', [
            'jobs6' => $this->getJobs6(),
        ]);
    }

    #[Route('/full-job-grid-1', name: 'app_full_job_grid_1')]
    public function fullJobGrid1(): Response
    {
        return $this->render('full-job-grid-1.html.twig', [
            'jobs7' => $this->getJobs7(),
        ]);
    }

    #[Route('/full-job-grid-2', name: 'app_full_job_grid_2')]
    public function fullJobGrid2(): Response
    {
        return $this->render('full-job-grid-2.html.twig', [
            'jobs8' => $this->getJobs8(),
        ]);
    }

    #[Route('/list-style-1', name: 'app_list_style_1')]
    public function listStyle1(): Response
    {
        return $this->render('list-style-1.html.twig', [
            'jobs9' => $this->getJobs9(),
        ]);
    }

    #[Route('/list-style-2', name: 'app_list_style_2')]
    public function listStyle2(): Response
    {
        return $this->render('list-style-2.html.twig', [
            'jobs10' => $this->getJobs10(),
        ]);
    }

    #[Route('/list-style-3', name: 'app_list_style_3')]
    public function listStyle3(): Response
    {
        return $this->render('list-style-3.html.twig', [
            'jobs4' => $this->getJobs4(),
        ]);
    }

    #[Route('/full-job-list-1', name: 'app_full_job_list_1')]
    public function fullJobList1(): Response
    {
        return $this->render('full-job-list-1.html.twig', [
            'jobs9' => $this->getJobs9(),
        ]);
    }

    #[Route('/full-job-list-2', name: 'app_full_job_list_2')]
    public function fullJobList2(): Response
    {
        return $this->render('full-job-list-2.html.twig', [
            'jobs10' => $this->getJobs10(),
        ]);
    }

    #[Route('/half-map', name: 'app_half_map')]
    public function halfMap(): Response
    {
        return $this->render('half-map.html.twig', [
            'jobs5' => $this->getJobs5(),
        ]);
    }

    #[Route('/half-map-2', name: 'app_half_map_2')]
    public function halfMap2(): Response
    {
        return $this->render('half-map-2.html.twig', [
            'jobs2' => $this->getJobs2(),
        ]);
    }

    #[Route('/half-map-3', name: 'app_half_map_3')]
    public function halfMap3(): Response
    {
        return $this->render('half-map-3.html.twig', [
            'jobs3' => $this->getJobs3(),
        ]);
    }

    #[Route('/half-map-list-1', name: 'app_half_map_list_1')]
    public function halfMapList1(): Response
    {
        return $this->render('half-map-list-1.html.twig', [
            'jobs9' => $this->getJobs9(),
        ]);
    }

    #[Route('/half-map-list-2', name: 'app_half_map_list_2')]
    public function halfMapList2(): Response
    {
        return $this->render('half-map-list-2.html.twig', [
            'jobs10' => $this->getJobs10(),
        ]);
    }

    #[Route('/candidate-grid-1', name: 'app_candidate_grid_1')]
    public function candidateGrid1(): Response
    {
        return $this->render('candidate-grid-1.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/candidate-grid-2', name: 'app_candidate_grid_2')]
    public function candidateGrid2(): Response
    {
        return $this->render('candidate-grid-2.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/candidate-list-1', name: 'app_candidate_list_1')]
    public function candidateList1(): Response
    {
        return $this->render('candidate-list-1.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/candidate-list-2', name: 'app_candidate_list_2')]
    public function candidateList2(): Response
    {
        return $this->render('candidate-list-2.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/candidate-half-map', name: 'app_candidate_half_map')]
    public function candidateHalfMap(): Response
    {
        return $this->render('candidate-half-map.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/candidate-half-map-list', name: 'app_candidate_half_map_list')]
    public function candidateHalfMapList(): Response
    {
        return $this->render('candidate-half-map-list.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/single-layout-1', name: 'app_single_layout_1')]
    public function singleLayout1(): Response
    {
        return $this->render('single-layout-1.html.twig');
    }

    #[Route('/single-layout-2', name: 'app_single_layout_2')]
    public function singleLayout2(): Response
    {
        return $this->render('single-layout-2.html.twig');
    }

    #[Route('/single-layout-3', name: 'app_single_layout_3')]
    public function singleLayout3(): Response
    {
        return $this->render('single-layout-3.html.twig');
    }

    #[Route('/single-layout-4', name: 'app_single_layout_4')]
    public function singleLayout4(): Response
    {
        return $this->render('single-layout-4.html.twig');
    }

    #[Route('/single-layout-5', name: 'app_single_layout_5')]
    public function singleLayout5(): Response
    {
        return $this->render('single-layout-5.html.twig');
    }

    #[Route('/single-layout-6', name: 'app_single_layout_6')]
    public function singleLayout6(): Response
    {
        return $this->render('single-layout-6.html.twig');
    }

    #[Route('/candidate-detail-2', name: 'app_candidate_detail_2')]
    public function candidateDetail2(): Response
    {
        return $this->render('candidate-detail-2.html.twig', [
            'informations' => $this->getInformations(),
        ]);
    }

    #[Route('/candidate-detail-3', name: 'app_candidate_detail_3')]
    public function candidateDetail3(): Response
    {
        return $this->render('candidate-detail-3.html.twig', [
            'informations' => $this->getInformations(),
        ]);
    }

    #[Route('/advance-search', name: 'app_advance_search')]
    public function advanceSearch(): Response
    {
        return $this->render('advance-search.html.twig', [
            'jobs3' => $this->getJobs3(),
            'jobs11' => $this->getJobs11(),
            'jobs12' => $this->getJobs12(),
        ]);
    }

    #[Route('/candidate-dashboard', name: 'app_candidate_dashboard')]
    public function candidateDashboard(): Response
    {
        return $this->render('candidate-dashboard.html.twig', [
            'ctrs3' => $this->getCtrs3(),
            'jobs10' => $this->getJobs10(),
        ]);
    }

    #[Route('/candidate-profile', name: 'app_candidate_profile')]
    public function candidateProfile(): Response
    {
        return $this->render('candidate-profile.html.twig');
    }

    #[Route('/candidate-resume', name: 'app_candidate_resume')]
    public function candidateResume(): Response
    {
        return $this->render('candidate-resume.html.twig');
    }

    #[Route('/candidate-applied-jobs', name: 'app_candidate_applied_jobs')]
    public function candidateAppliedJobs(): Response
    {
        return $this->render('candidate-applied-jobs.html.twig', [
            'jobs13' => $this->getJobs13(),
        ]);
    }

    #[Route('/candidate-alert-job', name: 'app_candidate_alert_job')]
    public function candidateAlertJob(): Response
    {
        return $this->render('candidate-alert-job.html.twig');
    }

    #[Route('/candidate-saved-jobs', name: 'app_candidate_saved_jobs')]
    public function candidateSavedJobs(): Response
    {
        return $this->render('candidate-saved-jobs.html.twig', [
            'jobs14' => $this->getJobs14(),
        ]);
    }

    #[Route('/candidate-follow-employers', name: 'app_candidate_follow_employers')]
    public function candidateFollowEmployers(): Response
    {
        return $this->render('candidate-follow-employers.html.twig', [
            'employers' => $this->getEmployers(),
        ]);
    }

    #[Route('/candidate-messages', name: 'app_candidate_messages')]
    public function candidateMessages(): Response
    {
        return $this->render('candidate-messages.html.twig');
    }

    #[Route('/candidate-change-password', name: 'app_candidate_change_password')]
    public function candidateChangePassword(): Response
    {
        return $this->render('candidate-change-password.html.twig');
    }

    #[Route('/candidate-delete-account', name: 'app_candidate_delete_account')]
    public function candidateDeleteAccount(): Response
    {
        return $this->render('candidate-delete-account.html.twig');
    }

    #[Route('/employer-grid-1', name: 'app_employer_grid_1')]
    public function employerGrid1(): Response
    {
        return $this->render('employer-grid-1.html.twig', [
            'employers2' => $this->getEmployers2(),
        ]);
    }

    #[Route('/employer-grid-2', name: 'app_employer_grid_2')]
    public function employerGrid2(): Response
    {
        return $this->render('employer-grid-2.html.twig', [
            'employers2' => $this->getEmployers2(),
        ]);
    }

    #[Route('/employer-list-1', name: 'app_employer_list_1')]
    public function employerList1(): Response
    {
        return $this->render('employer-list-1.html.twig', [
            'employers' => $this->getEmployers(),
        ]);
    }

    #[Route('/employer-half-map', name: 'app_employer_half_map')]
    public function employerHalfMap(): Response
    {
        return $this->render('employer-half-map.html.twig', [
            'employers2' => $this->getEmployers2(),
        ]);
    }

    #[Route('/employer-half-map-list', name: 'app_employer_half_map_list')]
    public function employerHalfMapList(): Response
    {
        return $this->render('employer-half-map-list.html.twig', [
            'employers' => $this->getEmployers(),
        ]);
    }

    #[Route('/employer-detail-2', name: 'app_employer_detail_2')]
    public function employerDetail2(): Response
    {
        return $this->render('employer-detail-2.html.twig', [
            'awards' => $this->getAwards(),
            'views' => $this->getViews(),
        ]);
    }

    #[Route('/employer-dashboard', name: 'app_employer_dashboard')]
    public function employerDashboard(): Response
    {
        return $this->render('employer-dashboard.html.twig', [
            'ctrs4' => $this->getCtrs4(),
            'posteds' => $this->getPosteds(),
        ]);
    }

    #[Route('/employer-profile', name: 'app_employer_profile')]
    public function employerProfile(): Response
    {
        return $this->render('employer-profile.html.twig');
    }

    #[Route('/employer-jobs', name: 'app_employer_jobs')]
    public function employerJobs(): Response
    {
        return $this->render('employer-jobs.html.twig', [
            'posteds' => $this->getPosteds(),
        ]);
    }

    #[Route('/employer-submit-job', name: 'app_employer_submit_job')]
    public function employerSubmitJob(): Response
    {
        return $this->render('employer-submit-job.html.twig');
    }

    #[Route('/employer-applicants-jobs', name: 'app_employer_applicants_jobs')]
    public function employerApplicantsJobs(): Response
    {
        return $this->render('employer-applicants-jobs.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/employer-shortlist-candidates', name: 'app_employer_shortlist_candidates')]
    public function employerShortlistCandidates(): Response
    {
        return $this->render('employer-shortlist-candidates.html.twig', [
            'candidates' => $this->getCandidates(),
        ]);
    }

    #[Route('/employer-package', name: 'app_employer_package')]
    public function employerPackage(): Response
    {
        return $this->render('employer-package.html.twig', [
            'tables' => $this->getTables(),
        ]);
    }

    #[Route('/employer-messages', name: 'app_employer_messages')]
    public function employerMessages(): Response
    {
        return $this->render('employer-messages.html.twig');
    }

    #[Route('/employer-change-password', name: 'app_employer_change_password')]
    public function employerChangePassword(): Response
    {
        return $this->render('employer-change-password.html.twig');
    }

    #[Route('/employer-delete-account', name: 'app_employer_delete_account')]
    public function employerDeleteAccount(): Response
    {
        return $this->render('employer-delete-account.html.twig');
    }

    #[Route('/about-us', name: 'app_about_us')]
    public function aboutUs(): Response
    {
        return $this->render('about-us.html.twig', [
            'teams' => $this->getTeams(),
            'needs' => $this->getNeeds(),
            'reviews' => $this->getReviews(),
        ]);
    }

    #[Route('/404', name: 'app_404')]
    public function notFound(): Response
    {
        return $this->render('404.html.twig');
    }

    #[Route('/checkout', name: 'app_checkout')]
    public function checkout(): Response
    {
        return $this->render('checkout.html.twig');
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('blog.html.twig', [
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/privacy', name: 'app_privacy')]
    public function privacy(): Response
    {
        return $this->render('privacy.html.twig');
    }

    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(): Response
    {
        return $this->render('pricing.html.twig');
    }

    #[Route('/faq', name: 'app_faq')]
    public function faq(): Response
    {
        return $this->render('faq.html.twig');
    }

    #[Route('/help', name: 'app_help')]
    public function help(): Response
    {
        return $this->render('help.html.twig', [
            'buttons' => $this->getButtons(),
            'alerts' => $this->getAlerts(),
            'links' => $this->getLinks(),
            'badges' => $this->getBadges(),
            'avatars' => $this->getAvatars(),
        ]);
    }

   
    #[Route('/signup', name: 'app_signup')]
    public function signup(): Response
    {
        return $this->render('signup.html.twig');
    }

    #[Route('/slider-home', name: 'app_slider_home')]
    public function sliderHome(): Response
    {
        return $this->render('slider-home.html.twig', [
            'sliders' => $this->getSliders(),
            'jobs' => $this->getJobs(),
            'categories2' => $this->getCategories2(),
            'jobs10' => $this->getJobs10(),
            'reviews' => $this->getReviews(),
        ]);
    }
}
