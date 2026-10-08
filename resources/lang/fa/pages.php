<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'کد ردیابی Cloudflare Web Analytics را برای سایت خود پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'توکن سایت',
            'helper' => 'توکن سایت شما در Cloudflare Web Analytics (۳۲ نویسه). آن را در Cloudflare در بخش Analytics & Logs > Web Analytics > Manage site پیدا کنید. برای غیرفعال کردن ردیابی خالی بگذارید.',
        ],
    ],
];
