<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Cloudflare Web Analytics',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Configure o código de rastreamento do Cloudflare Web Analytics do seu site.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Token do site',
            'helper' => 'O token do site no Cloudflare Web Analytics (32 caracteres). Encontre-o em Cloudflare, em Analytics & Logs > Web Analytics > Manage site. Deixe vazio para desativar o rastreio.',
        ],
    ],
];
