<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Cloudflare Web Analytics सेटिंग्स',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'अपनी साइट के लिए Cloudflare Web Analytics ट्रैकिंग कोड कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'साइट टोकन',
            'helper' => 'आपका Cloudflare Web Analytics साइट टोकन (32 अक्षर)। इसे Cloudflare में Analytics & Logs > Web Analytics > Manage site में पाएँ। ट्रैकिंग बंद करने के लिए खाली छोड़ें।',
        ],
    ],
];
