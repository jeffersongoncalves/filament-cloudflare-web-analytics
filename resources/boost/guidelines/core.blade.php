## Filament Cloudflare Web Analytics

Filament plugin for Cloudflare Web Analytics with a settings page powered by Spatie Laravel Settings. The script is injected at `PanelsRenderHook::HEAD_START` of every panel page once the settings are complete.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-cloudflare-web-analytics:"^2.0"
php artisan vendor:publish --tag=cloudflare-web-analytics-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\CloudflareWebAnalytics\CloudflareWebAnalyticsPlugin;

$panel->plugins([
    CloudflareWebAnalyticsPlugin::make(),
]);
</code-snippet>
@endverbatim

### Architecture
- `CloudflareWebAnalyticsPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageCloudflareWebAnalyticsSettings` (disable with `->settingsPage(false)`)
- `CloudflareWebAnalyticsServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `cloudflare-web-analytics::script` view from `jeffersongoncalves/laravel-cloudflare-web-analytics`
- `ManageCloudflareWebAnalyticsSettings` is a `SettingsPage` bound to `JeffersonGoncalves\CloudflareWebAnalytics\Settings\CloudflareWebAnalyticsSettings`
- Translations live under `filament-cloudflare-web-analytics::pages.*`
