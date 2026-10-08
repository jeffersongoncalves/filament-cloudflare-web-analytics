<?php

namespace JeffersonGoncalves\Filament\CloudflareWebAnalytics;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class CloudflareWebAnalyticsServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-cloudflare-web-analytics';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::HEAD_START => 'cloudflare-web-analytics::script',
        ];
    }
}
