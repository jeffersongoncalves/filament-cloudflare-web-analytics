<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Configurez le code de suivi Cloudflare Web Analytics de votre site.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Jeton du site',
            'helper' => 'Le jeton de votre site Cloudflare Web Analytics (32 caractères). Vous le trouverez dans Cloudflare, sous Analytics & Logs > Web Analytics > Manage site. Laissez vide pour désactiver le suivi.',
        ],
    ],
];
