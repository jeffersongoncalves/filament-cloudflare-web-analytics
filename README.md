<div class="filament-hidden">

![Filament Cloudflare Web Analytics](https://raw.githubusercontent.com/jeffersongoncalves/filament-cloudflare-web-analytics/3.x/art/jeffersongoncalves-filament-cloudflare-web-analytics.png)

</div>

# Filament Cloudflare Web Analytics

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-cloudflare-web-analytics.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cloudflare-web-analytics)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-cloudflare-web-analytics/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-cloudflare-web-analytics/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-cloudflare-web-analytics.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cloudflare-web-analytics)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-cloudflare-web-analytics.svg?style=flat-square)](LICENSE.md)

Filament plugin for [Cloudflare Web Analytics](https://www.cloudflare.com/web-analytics/) — privacy-first, cookie-free analytics from Cloudflare — with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings). Manage Cloudflare Web Analytics from the Filament admin panel; the script is injected into the `<head>` of every panel page.

Built on top of [jeffersongoncalves/laravel-cloudflare-web-analytics](https://github.com/jeffersongoncalves/laravel-cloudflare-web-analytics).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-cloudflare-web-analytics:"^3.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=cloudflare-web-analytics-settings-migrations
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\CloudflareWebAnalytics\CloudflareWebAnalyticsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            CloudflareWebAnalyticsPlugin::make(),
        ]);
}
```

The plugin registers a **Cloudflare Web Analytics** settings page and injects the script into the `<head>` of every panel page once the settings are complete.

| Field | Label |
|-------|-------|
| `token` | Site token |

### Disable the Settings Page

```php
CloudflareWebAnalyticsPlugin::make()
    ->settingsPage(false),
```

To render the script outside Filament, add `@include('cloudflare-web-analytics::script')` to your own layout.

### Navigation group

Put the settings page in one of your panel's own navigation groups (a string or a closure):

```php
CloudflareWebAnalyticsPlugin::make()
    ->navigationGroup(fn (): string => __('admin.navigation.settings')),
```

## Requirements

- PHP 8.2 or higher
- Filament 5.x

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
