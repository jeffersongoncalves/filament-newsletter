## Filament Newsletter

This plugin provides an admin UI on top of `jeffersongoncalves/laravel-newsletter` for composing, scheduling, and sending newsletters to subscriber email groups.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-newsletter
</code-snippet>
@endverbatim

### Register in the Panel

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\FilamentNewsletter\FilamentNewsletterPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentNewsletterPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Resources

- **NewsletterResource** — compose, schedule, and send newsletters. Content can be Rich Text, Markdown, or raw HTML depending on the `content_type` field.
- **EmailGroupResource** — manage subscriber lists and their members.

### Table Actions on NewsletterResource

- `sendTest` — sends a single test copy to an arbitrary email address.
- `sendNow` — sends the newsletter to every subscriber of its email groups.
- `schedule` — sets `scheduled_at` and moves the status to `scheduled`.
- `sendingStatus` — read-only modal with sent vs. failed delivery counts.
- `checkBrokenLinks` — scans the newsletter content and reports broken URLs.

### Best Practices

- Override the `newsletter` / `email_group` resource classes via `config('filament-newsletter.resources')` if you need custom behaviour.
- Newsletters are only sent to email groups attached via the `emailGroups` relationship — a newsletter with no groups selected has no recipients.
