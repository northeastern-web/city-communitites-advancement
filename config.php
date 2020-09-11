<?php

use Illuminate\Support\Str;
use App\Contentful\ContentfulCollection;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'City and Community Engagement',
    'defaultDescription' => 'We bring together community organizations, social service groups, government agencies, and Northeastern students, faculty, and staff to build a better world. A spirit of collaboration infuses everything we do, from hosting volunteer programs, to conducting service-based research, to organizing community events.',
    'collections' => [
        'events' => [
            'extends' => '_layouts.event',
            'path' => 'events/{slug}',
            'items' => function ($config) {
                return  (new ContentfulCollection(
                    $config->get('CONTENTFUL_API_KEY'),
                    $config->get('CONTENTFUL_SPACE_ID')
                ))->getEvents();
            },
        ],
        'service_opportunities' => [
            'extends' => '_layouts.service-opportunity',
            'path' => 'service-finder/{slug}',
            'items' => function ($config) {
                return  (new ContentfulCollection(
                    $config->get('CONTENTFUL_API_KEY'),
                    $config->get('CONTENTFUL_SPACE_ID')
                ))->getServiceOpportunities();
            },
        ],
        'staffs' => [
            'extends' => '_layouts.staff',
            'path' => 'staff/{slug}',
            'items' => function ($config) {
                return  (new ContentfulCollection(
                    $config->get('CONTENTFUL_API_KEY'),
                    $config->get('CONTENTFUL_SPACE_ID')
                ))->getStaff();
            },
        ],
        'news' => [
            'extends' => '_layouts.news',
            'path' => function ($page) {
                return 'news/' . Str::slug($page->title);
            },
            'items' => function ($config) {
                return  (new ContentfulCollection(
                    $config->get('CONTENTFUL_API_KEY'),
                    $config->get('CONTENTFUL_SPACE_ID')
                ))->getNews();
            },
        ],
        'programs',
        'engageStudents',
        'engageFaculty',
        'engageStaff',
        'engageResidents',
        'engageCommunityOrganizations',
    ],

    'CONTENTFUL_API_KEY' => 'D4A0rcxIVd3v8mP2iLXNABVsx2tRmJFw7qY7sMsVdSI',
    'CONTENTFUL_SPACE_ID' => 'ts4u2gj8mrjc',

    'navigationLinks' => function ($config, $programs) {
        return [
            [
                'text' => 'Our Programs',
                'href' => '/programs',
                'children' => $programs->map(function ($program) {
                    return [
                        'text' => $program->title,
                        'href' => $program->getPath(),
                    ];
                }),
            ],
            [
                'text' => 'Engage With Us',
                'href' => '/engage/students',
                'children' => [
                    [
                        'text' => 'Students',
                        'href' => '/engage/students',
                    ],
                    [
                        'text' => 'Faculty',
                        'href' => '/engage/faculty',
                    ],
                    [
                        'text' => 'Staff',
                        'href' => '/engage/staff',
                    ],
                    [
                        'text' => 'Residents',
                        'href' => '/engage/residents',
                    ],
                    [
                        'text' => 'Community Organizations',
                        'href' => '/engage/community-organizations',
                    ],
                ]
            ],
            [
                'text' => 'Service Finder',
                'href' => '/service-finder',
            ],
            [
                'text' => 'Events',
                'href' => '/events',
                'children' => [
                    [
                        'text' => 'All Events',
                        'href' => '/events',
                    ],
                    [
                        'text' => 'Signature Events',
                        'href' => '/events/signature',
                    ],
                    [
                        'text' => 'Book Northeastern Crossing',
                        'href' => '/engage/book',
                    ],
                ],
            ],
            [
                'text' => 'News',
                'href' => '/news',
            ],
            [
                'text' => 'About',
                'href' => '/about',
                'children' => [
                    [
                        'text' => 'About',
                        'href' => '/about',
                    ],
                    [
                        'text' => 'Our Staff',
                        'href' => '/about/staff',
                    ],
                    [
                        'text' => 'Job Opportunities',
                        'href' => '/about/careers',
                    ],
                    [
                        'text' => 'Community Partners',
                        'href' => '/about/partners',
                    ],
                    [
                        'text' => 'Awards, Grants, and Recognitions',
                        'href' => '/about/awards',
                    ],
                    [
                        'text' => 'Donations and Sponsorships',
                        'href' => '/about/donations',
                    ],
                    [
                        'text' => 'Contact Us',
                        'href' => '/about#contact-us',
                    ],
                ],
            ],
        ];
    },
];
