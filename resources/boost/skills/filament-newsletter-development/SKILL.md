---
name: filament-newsletter-development
description: Build and work with Filament Newsletter features, including composing newsletters, managing email groups, and sending/scheduling.
---

# Filament Newsletter Development

## When to use this skill

Use this skill when:
- Integrating Filament Newsletter into a panel
- Customizing the Newsletter or Email Group resources
- Adding new sending or delivery-tracking behaviour

## Configuration

### Basic Setup

```php
use JeffersonGoncalves\FilamentNewsletter\FilamentNewsletterPlugin;

FilamentNewsletterPlugin::make();
```

### Overriding Resources

```php
// config/filament-newsletter.php
return [
    'resources' => [
        'newsletter' => \App\Filament\Resources\CustomNewsletterResource::class,
        'email_group' => \JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource::class,
    ],
];
```

## Domain Models

The plugin builds its UI on top of `jeffersongoncalves/laravel-newsletter` models:

- `Newsletter` — subject, sender, content (+ `content_type`: rich_text/markdown/html), status (draft/scheduled/sending/sent), scheduling, and `attachments` media collection.
- `EmailGroup` — a named subscriber list with a `members` relationship.
- `EmailGroupMember` — an individual subscriber (email, confirmed_at, unsubscribed).
- `NewsletterSentRecipient` — per-recipient delivery outcome (sent/failed) for a sent newsletter.

## Table Actions

### Send Test

```php
use JeffersonGoncalves\FilamentNewsletter\Actions\SendTestNewsletterTableAction;

SendTestNewsletterTableAction::make();
```

### Send Now

```php
use JeffersonGoncalves\FilamentNewsletter\Actions\SendNewsletterTableAction;

SendNewsletterTableAction::make();
```

### Schedule

```php
use JeffersonGoncalves\FilamentNewsletter\Actions\ScheduleNewsletterTableAction;

ScheduleNewsletterTableAction::make();
```

### Sending Status

```php
use JeffersonGoncalves\FilamentNewsletter\Actions\SendingStatusTableAction;

SendingStatusTableAction::make();
```

### Check Broken Links

```php
use JeffersonGoncalves\FilamentNewsletter\Actions\CheckBrokenLinksTableAction;

CheckBrokenLinksTableAction::make();
```

## Troubleshooting

### Plugin not registered

**Cause**: Plugin not added to the panel's `plugins()` array.

**Solution**: Add `FilamentNewsletterPlugin::make()` to your `PanelProvider`.

### "Send now" action is missing for a newsletter

**Cause**: The newsletter's status is already `sending` or `sent` — the action hides itself once sending has started.

**Solution**: This is expected; use the "Sending status" action to inspect delivery results instead.
