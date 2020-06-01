<?php

use Illuminate\Support\Str;
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
    'CONTENTFUL_API_KEY' => 'A_Rrll-l9VF_CYkRwllZIxsp3GcISsXIpgiSeh7UDno',
    'CONTENTFUL_SPACE_ID' => '8276ycqoicis',
];
