---
name: filament-cloudflare-web-analytics-development
description: Build and work with the Filament Cloudflare Web Analytics plugin — settings page and script injection in Filament panels.
---

# Filament Cloudflare Web Analytics Development

## When to use this skill

- Adding or changing the Cloudflare Web Analytics integration of a Filament panel
- Customizing the Cloudflare Web Analytics settings page
- Debugging a missing Cloudflare Web Analytics script in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-cloudflare-web-analytics` (branch `1.x`)
- **Namespace**: `JeffersonGoncalves\Filament\CloudflareWebAnalytics`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^1.0`, `jeffersongoncalves/laravel-cloudflare-web-analytics:^1.0`

## Setup

```php
use JeffersonGoncalves\Filament\CloudflareWebAnalytics\CloudflareWebAnalyticsPlugin;

$panel->plugins([
    CloudflareWebAnalyticsPlugin::make(),                        // settings page + script injection
    // CloudflareWebAnalyticsPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=cloudflare-web-analytics-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Component |
|-------|-----------|
| `token` | TextInput |

## Troubleshooting

- **Script missing**: the settings are incomplete — `app(\JeffersonGoncalves\CloudflareWebAnalytics\Settings\CloudflareWebAnalyticsSettings::class)->isConfigured()`.
- **Settings page errors**: the `cloudflare_web_analytics` settings group is missing — publish and run the migrations.
