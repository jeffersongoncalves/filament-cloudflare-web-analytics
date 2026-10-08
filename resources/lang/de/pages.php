<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Einstellungen',
    'title' => 'Cloudflare Web Analytics-Einstellungen',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Konfigurieren Sie den Cloudflare Web Analytics-Tracking-Code für Ihre Website.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Site-Token',
            'helper' => 'Ihr Cloudflare Web Analytics-Site-Token (32 Zeichen). Zu finden in Cloudflare unter Analytics & Logs > Web Analytics > Manage site. Leer lassen, um das Tracking zu deaktivieren.',
        ],
    ],
];
