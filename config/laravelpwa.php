<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'CT_Taste'),
        'short_name' => 'CT_Taste',
        'start_url' => '/dashboard',
        'background_color' => '#ffffff',
        'theme_color' => '#ebab21',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> '#640f11',
        'icons' => [
            '72x72' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/assets/media/logos/fav_01.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/assets/media/logos/fav_01.png',
            '750x1334' => '/assets/media/logos/fav_01.png',
            '828x1792' => '/assets/media/logos/fav_01.png',
            '1125x2436' => '/assets/media/logos/fav_01.png',
            '1242x2208' => '/assets/media/logos/fav_01.png',
            '1242x2688' => '/assets/media/logos/fav_01.png',
            '1536x2048' => '/assets/media/logos/fav_01.png',
            '1668x2224' => '/assets/media/logos/fav_01.png',
            '1668x2388' => '/assets/media/logos/fav_01.png',
            '2048x2732' => '/assets/media/logos/fav_01.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/dashboard',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
