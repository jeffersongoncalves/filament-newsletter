<?php

declare(strict_types=1);

use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource\Pages\CreateNewsletter;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource\Pages\EditNewsletter;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource\Pages\ListNewsletters;
use JeffersonGoncalves\FilamentNewsletter\Tests\Models\User;
use JeffersonGoncalves\Newsletter\Models\Newsletter;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(User::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('password'),
    ]));
});

it('can render the newsletters list page', function () {
    Livewire::test(ListNewsletters::class)
        ->assertSuccessful();
});

it('can render the create newsletter page', function () {
    Livewire::test(CreateNewsletter::class)
        ->assertSuccessful();
});

it('can create a newsletter', function () {
    Livewire::test(CreateNewsletter::class)
        ->fillForm([
            'subject' => 'Monthly digest',
            'sender_name' => 'Acme Inc.',
            'sender_email' => 'news@acme.test',
            'content_type' => 'rich_text',
            'content_rich_text' => '<p>Hello world</p>',
            'route' => 'monthly-digest',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $newsletter = Newsletter::query()->where('route', 'monthly-digest')->first();

    expect($newsletter)->not->toBeNull()
        ->and($newsletter->content)->toBe('<p>Hello world</p>');
});

it('can render the edit newsletter page', function () {
    $newsletter = Newsletter::create([
        'subject' => 'Weekly update',
        'sender_email' => 'news@acme.test',
        'content_type' => 'markdown',
        'content' => '# Hello',
        'route' => 'weekly-update',
    ]);

    Livewire::test(EditNewsletter::class, ['record' => $newsletter->getRouteKey()])
        ->assertSuccessful()
        ->assertFormSet(['content_markdown' => '# Hello']);
});

it('preserves html content when editing', function () {
    $newsletter = Newsletter::create([
        'subject' => 'Raw HTML edition',
        'sender_email' => 'news@acme.test',
        'content_type' => 'html',
        'content' => '<p>Raw HTML body</p>',
        'route' => 'raw-html-edition',
    ]);

    Livewire::test(EditNewsletter::class, ['record' => $newsletter->getRouteKey()])
        ->assertSuccessful()
        ->assertFormSet(['content_html' => '<p>Raw HTML body</p>']);
});
