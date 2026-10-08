<?php

namespace JeffersonGoncalves\Filament\CloudflareWebAnalytics;

use JeffersonGoncalves\Filament\CloudflareWebAnalytics\Pages\ManageCloudflareWebAnalyticsSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class CloudflareWebAnalyticsPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-cloudflare-web-analytics';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageCloudflareWebAnalyticsSettings::class;
    }
}
