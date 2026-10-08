<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'اضبط كود تتبع Cloudflare Web Analytics لموقعك.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'رمز الموقع',
            'helper' => 'رمز موقعك في Cloudflare Web Analytics (32 حرفًا). تجده في Cloudflare ضمن Analytics & Logs > Web Analytics > Manage site. اتركه فارغًا لتعطيل التتبع.',
        ],
    ],
];
