<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentNewsletterServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-newsletter';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations();
    }
}
