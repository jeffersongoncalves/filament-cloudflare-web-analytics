<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Parametrlər',
    'title' => 'Cloudflare Web Analytics parametrləri',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Saytınız üçün Cloudflare Web Analytics izləmə kodunu konfiqurasiya edin.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Sayt tokeni',
            'helper' => 'Cloudflare Web Analytics sayt tokeniniz (32 simvol). Cloudflare daxilində Analytics & Logs > Web Analytics > Manage site bölməsində tapılır. İzləməni söndürmək üçün boş buraxın.',
        ],
    ],
];
