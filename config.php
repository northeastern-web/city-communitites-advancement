<?php

use App\Contentful\ContentfulCollection;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'City and Community Advancement',
    'description' => 'We bring together community organizations, social service groups, government agencies, and Northeastern students, faculty, and staff to build a better world. A spirit of collaboration infuses everything we do, from hosting volunteer programs, to conducting service-based research, to organizing community events.',
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
        ]
    ],
    'CONTENTFUL_API_KEY' => 'u_xvJoeZo4DtHxww6W6YsA6h6SmvRKgF-3TDWm9271A',
    'CONTENTFUL_SPACE_ID' => 'qib31wqyu9sy',
];
