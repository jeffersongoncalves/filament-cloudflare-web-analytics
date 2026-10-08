<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Settings',
    'title' => 'Cloudflare Web Analytics Settings',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Configure the Cloudflare Web Analytics tracking code for your site.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Site token',
            'helper' => 'Your Cloudflare Web Analytics site token (32 characters). Find it in Cloudflare under Analytics & Logs > Web Analytics > Manage site. Leave empty to disable tracking.',
        ],
    ],
];
