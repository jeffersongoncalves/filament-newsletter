<?php

declare(strict_types=1);

use Filament\Contracts\Plugin;
use JeffersonGoncalves\FilamentNewsletter\FilamentNewsletterPlugin;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource;

test('plugin has correct id', function () {
    $plugin = FilamentNewsletterPlugin::make();

    expect($plugin->getId())->toBe('filament-newsletter');
});

test('plugin implements the Filament Plugin contract', function () {
    expect(FilamentNewsletterPlugin::make())->toBeInstanceOf(Plugin::class);
});

test('plugin make() returns an instance', function () {
    expect(FilamentNewsletterPlugin::make())->toBeInstanceOf(FilamentNewsletterPlugin::class);
});

test('plugin get() resolves the registered instance from the panel', function () {
    expect(FilamentNewsletterPlugin::get())->toBeInstanceOf(FilamentNewsletterPlugin::class);
});

test('plugin registers the newsletter and email group resources by default', function () {
    $resources = config('filament-newsletter.resources');

    expect($resources['newsletter'])->toBe(NewsletterResource::class)
        ->and($resources['email_group'])->toBe(EmailGroupResource::class);
});
