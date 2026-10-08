<?php

return [
    'navigation_label' => 'Cloudflare Web Analytics',
    'navigation_group' => '设置',
    'title' => 'Cloudflare Web Analytics 设置',
    'sections' => [
        'cloudflare_web_analytics' => [
            'heading' => 'Cloudflare Web Analytics',
            'description' => '为你的网站配置 Cloudflare Web Analytics 跟踪代码。',
        ],
    ],
    'fields' => [
        'token' => [
            'label' => '站点令牌',
            'helper' => '你的 Cloudflare Web Analytics 站点令牌（32 个字符）。 可在 Cloudflare 的 Analytics & Logs > Web Analytics > Manage site 中找到。 留空则停用跟踪。',
        ],
    ],
];
