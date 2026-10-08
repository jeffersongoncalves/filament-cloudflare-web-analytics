<?php

namespace JeffersonGoncalves\Filament\CloudflareWebAnalytics\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\CloudflareWebAnalytics\Settings\CloudflareWebAnalyticsSettings;

class ManageCloudflareWebAnalyticsSettings extends SettingsPage
{
    protected static string $settings = CloudflareWebAnalyticsSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function getNavigationLabel(): string
    {
        return __('filament-cloudflare-web-analytics::pages.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-cloudflare-web-analytics::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-cloudflare-web-analytics::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-cloudflare-web-analytics::pages.sections.cloudflare_web_analytics.heading'))
                    ->description(__('filament-cloudflare-web-analytics::pages.sections.cloudflare_web_analytics.description'))
                    ->schema([
                        TextInput::make('token')
                            ->label(__('filament-cloudflare-web-analytics::pages.fields.token.label'))
                            ->helperText(__('filament-cloudflare-web-analytics::pages.fields.token.helper'))
                            ->placeholder('0123456789abcdef0123456789abcdef')
                            ->regex('/^[a-f0-9]{32}$/i')
                            ->maxLength(32)
                            ->nullable(),
                    ]),
            ]);
    }
}
