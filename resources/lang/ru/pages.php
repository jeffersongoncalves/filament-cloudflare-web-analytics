<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Настройте код отслеживания Cloudflare Web Analytics для вашего сайта.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Токен сайта',
            'helper' => 'Токен сайта в Cloudflare Web Analytics (32 символа). Его можно найти в Cloudflare в разделе Analytics & Logs > Web Analytics > Manage site. Оставьте пустым, чтобы отключить отслеживание.',
        ],
    ],
];
