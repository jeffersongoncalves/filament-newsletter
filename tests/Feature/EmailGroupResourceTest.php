<?php

declare(strict_types=1);

use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\Pages\CreateEmailGroup;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\Pages\ListEmailGroups;
use JeffersonGoncalves\FilamentNewsletter\Tests\Models\User;
use JeffersonGoncalves\Newsletter\Models\EmailGroup;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(User::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('password'),
    ]));
});

it('can render the email groups list page', function () {
    Livewire::test(ListEmailGroups::class)
        ->assertSuccessful();
});

it('can create an email group', function () {
    Livewire::test(CreateEmailGroup::class)
        ->fillForm(['title' => 'Product Updates'])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(EmailGroup::query()->where('title', 'Product Updates')->exists())->toBeTrue();
});
