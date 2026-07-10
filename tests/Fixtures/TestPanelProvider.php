<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Tests\Fixtures;

use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Livewire\Partials\DataStoreOverride;
use JeffersonGoncalves\FilamentNewsletter\FilamentNewsletterPlugin;
use Livewire\Mechanisms\DataStore;

class TestPanelProvider extends PanelProvider
{
    public function boot(): void
    {
        // Workaround: filament/support registers its DataStore override via a
        // plain (non-shared) `bind()`, which drops Livewire's cached singleton
        // instance and never re-caches under the `DataStore::class` abstract
        // that Livewire's helpers resolve against. Every `store()` call then
        // gets a fresh, empty WeakMap, so component error bags never persist
        // and rendering blows up with `ViewErrorBag::put(): ... null given`.
        // Re-register it as a proper singleton once all providers have booted.
        $this->app->singleton(DataStore::class, DataStoreOverride::class);
    }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugin(FilamentNewsletterPlugin::make())
            ->middleware([
                DispatchServingFilamentEvent::class,
                DisableBladeIconComponents::class,
            ]);
    }
}
