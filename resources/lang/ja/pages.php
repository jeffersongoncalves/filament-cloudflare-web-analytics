<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => '設定',
    'title' => 'Cloudflare Web Analytics 設定',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => 'サイトの Cloudflare Web Analytics トラッキングコードを設定します。',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => 'サイトトークン',
            'helper' => 'Cloudflare Web Analytics のサイトトークン（32 文字）。 Cloudflare の Analytics & Logs > Web Analytics > Manage site で確認できます。 トラッキングを無効にするには空のままにします。',
        ],
    ],
];
