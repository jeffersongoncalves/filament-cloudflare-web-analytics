<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Skonfiguruj kod śledzenia Cloudflare Web Analytics dla swojej witryny.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Token witryny',
            'helper' => 'Token witryny w Cloudflare Web Analytics (32 znaki). Znajdziesz go w Cloudflare w Analytics & Logs > Web Analytics > Manage site. Pozostaw puste, aby wyłączyć śledzenie.',
        ],
    ],
];
