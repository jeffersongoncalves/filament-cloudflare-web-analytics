<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'Ayarlar',
    'title' => 'Cloudflare Web Analytics ayarları',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'Siteniz için Cloudflare Web Analytics izleme kodunu yapılandırın.',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'Site belirteci',
            'helper' => 'Cloudflare Web Analytics site belirteciniz (32 karakter). Cloudflare içinde Analytics & Logs > Web Analytics > Manage site altında bulunur. İzlemeyi devre dışı bırakmak için boş bırakın.',
        ],
    ],
];
