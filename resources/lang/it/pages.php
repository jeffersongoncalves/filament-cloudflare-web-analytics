<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Configura il codice di tracciamento Cloudflare Web Analytics del tuo sito.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Token del sito',
            'helper' => 'Il token del sito Cloudflare Web Analytics (32 caratteri). Lo trovi in Cloudflare, in Analytics & Logs > Web Analytics > Manage site. Lascia vuoto per disattivare il tracciamento.',
        ],
    ],
];
