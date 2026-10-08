<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Configura el código de seguimiento de Cloudflare Web Analytics de tu sitio.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Token del sitio',
            'helper' => 'El token del sitio en Cloudflare Web Analytics (32 caracteres). Encuéntralo en Cloudflare, en Analytics & Logs > Web Analytics > Manage site. Déjalo vacío para desactivar el seguimiento.',
        ],
    ],
];
