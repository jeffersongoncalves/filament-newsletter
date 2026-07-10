<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Tests;

use Filament\FilamentServiceProvider;
use Filament\Support\SupportServiceProvider;
use JeffersonGoncalves\FilamentNewsletter\FilamentNewsletterServiceProvider;
use JeffersonGoncalves\FilamentNewsletter\Tests\Fixtures\TestPanelProvider;
use JeffersonGoncalves\Newsletter\NewsletterServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            SupportServiceProvider::class,
            FilamentServiceProvider::class,
            NewsletterServiceProvider::class,
            FilamentNewsletterServiceProvider::class,
            TestPanelProvider::class,
        ];
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    protected function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
        config()->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        config()->set('auth.providers.users.model', \JeffersonGoncalves\FilamentNewsletter\Tests\Models\User::class);

        config()->set('app.key', 'base64:'.base64_encode(random_bytes(32)));
    }
}
