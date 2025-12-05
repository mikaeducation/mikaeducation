<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Filament\PanelProvider;
use Filament\Pages\Dashboard;

use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\FilamentAuthenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;

use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;

use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;

use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            // ->login() <-- halaman login bawaan filament
            
            ->brandName('Mika Education')
            ->navigationGroups([
                'Konten Pembelajaran',
                'Monitoring Pengguna',
                'Media Interaksi',
            ])

            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                FilamentAuthenticate::class,
                AdminOnly::class,
            ]);
    }

    public function boot(): void
    {
        FilamentView::registerRenderHook(
            'panels::body.end',
            fn (): string => Blade::render(<<<'HTML'
                <style>
                    .fi-ta-header-cell-actions {
                        justify-content: center !important;
                        text-align: center !important;
                    }
                    .fi-ta-actions-cell {
                        justify-content: center !important;
                        text-align: center !important;
                    }

                    tr.trashed-row {
                        background-color: #fef2f2 !important;
                    }
                    tr.trashed-row > td:first-child {
                        border-left: 4px solid #dc2626 !important;
                    }
                    tr.trashed-row .fi-ta-text-item {
                        opacity: 0.5 !important;
                    }

                    .dark tr.trashed-row {
                        background-color: rgba(127, 29, 29, 0.2) !important;
                    }
                </style>
            HTML)
        );
    }
}
