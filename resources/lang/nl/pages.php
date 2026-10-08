<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Instellingen',
    'title' => 'Cloudflare Web Analytics-instellingen',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Configureer de Cloudflare Web Analytics-trackingcode voor je site.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Sitetoken',
            'helper' => 'Je Cloudflare Web Analytics-sitetoken (32 tekens). Te vinden in Cloudflare onder Analytics & Logs > Web Analytics > Manage site. Laat leeg om tracking uit te schakelen.',
        ],
    ],
];
