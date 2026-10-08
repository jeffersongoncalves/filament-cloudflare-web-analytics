# Changelog

All notable changes to `filament-cloudflare-web-analytics` will be documented in this file.

## 1.0.0 - 2026-10-08

First release for Filament 3.x.

Cloudflare Web Analytics for Filament on top of [laravel-cloudflare-web-analytics](https://github.com/jeffersongoncalves/laravel-cloudflare-web-analytics):

- Script injected at `PanelsRenderHook::HEAD_START` once the settings are complete
- Settings page with validation
- `->settingsPage(false)` for injection only
- Translations in 19 languages
