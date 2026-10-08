<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\CloudflareWebAnalytics\Settings\CloudflareWebAnalyticsSettings;
use JeffersonGoncalves\Filament\CloudflareWebAnalytics\CloudflareWebAnalyticsPlugin;
use JeffersonGoncalves\Filament\CloudflareWebAnalytics\Pages\ManageCloudflareWebAnalyticsSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageCloudflareWebAnalyticsSettings::class)
        ->and(CloudflareWebAnalyticsPlugin::make()->getId())->toBe('filament-cloudflare-web-analytics');
});

it('uses translated labels', function () {
    expect(ManageCloudflareWebAnalyticsSettings::getNavigationLabel())->toBe('Cloudflare Web Analytics');

    app()->setLocale('pt_BR');

    expect((new ManageCloudflareWebAnalyticsSettings)->getTitle())->toBe('Configurações do Cloudflare Web Analytics');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageCloudflareWebAnalyticsSettings::class)
        ->fillForm(['token' => '0123456789abcdef0123456789abcdef'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(app(CloudflareWebAnalyticsSettings::class)->refresh()->isConfigured())->toBeTrue()
        ->and(app(CloudflareWebAnalyticsSettings::class)->refresh()->token)->toBe('0123456789abcdef0123456789abcdef');
});

it('rejects an invalid value', function () {
    Livewire::test(ManageCloudflareWebAnalyticsSettings::class)
        ->fillForm(['token' => 'x\'><script>alert(1)</script>'])
        ->call('save')
        ->assertHasFormErrors(['token']);
});

it('injects the Cloudflare Web Analytics script into the panel once configured', function () {
    $settings = app(CloudflareWebAnalyticsSettings::class);
    $settings->token = '0123456789abcdef0123456789abcdef';
    $settings->save();

    expect((string) FilamentView::renderHook(PanelsRenderHook::HEAD_START))->toContain('cloudflareinsights.com');
});
