<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Налаштуйте код відстеження Cloudflare Web Analytics для вашого сайту.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Токен сайту',
            'helper' => 'Токен сайту в Cloudflare Web Analytics (32 символи). Його можна знайти в Cloudflare у розділі Analytics & Logs > Web Analytics > Manage site. Залиште порожнім, щоб вимкнути відстеження.',
        ],
    ],
];
