<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Cloudflare Web Analytics sozlamalari',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Saytingiz uchun Cloudflare Web Analytics kuzatuv kodini sozlang.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Sayt tokeni',
            'helper' => 'Cloudflare Web Analytics sayt tokeningiz (32 belgi). Cloudflare ichida Analytics & Logs > Web Analytics > Manage site bo‘limida topasiz. Kuzatuvni o‘chirish uchun bo‘sh qoldiring.',
        ],
    ],
];
