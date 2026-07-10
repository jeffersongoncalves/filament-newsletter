<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource;

class FilamentNewsletterPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-newsletter';
    }

    public function register(Panel $panel): void
    {
        $resources = config('filament-newsletter.resources', []);

        $panel->resources([
            $resources['newsletter'] ?? NewsletterResource::class,
            $resources['email_group'] ?? EmailGroupResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
