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
                    $config->get('CONTENTFUL_EVENTS_API_KEY'),
                    $config->get('CONTENTFUL_EVENTS_SPACE_ID')
                ))->getEvents();
            },
        ],
        'service_opportunities' => [
            'extends' => '_layouts.service-opportunity',
            'path' => 'service-finder/{slug}',
            'items' => function ($config) {
                return  (new ContentfulCollection(
                    $config->get('CONTENTFUL_CCE_API_KEY'),
                    $config->get('CONTENTFUL_CCE_SPACE_ID')
                ))->getServiceOpportunities();
            },
        ]
    ],

    'CONTENTFUL_EVENTS_API_KEY' => 'u_xvJoeZo4DtHxww6W6YsA6h6SmvRKgF-3TDWm9271A',
    'CONTENTFUL_EVENTS_SPACE_ID' => 'qib31wqyu9sy',

    'CONTENTFUL_CCE_API_KEY' => 'D4A0rcxIVd3v8mP2iLXNABVsx2tRmJFw7qY7sMsVdSI',
    'CONTENTFUL_CCE_SPACE_ID' => 'ts4u2gj8mrjc',
];
