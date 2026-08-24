<div class="filament-hidden">

![Filament Newsletter](https://raw.githubusercontent.com/jeffersongoncalves/filament-newsletter/2.x/art/jeffersongoncalves-filament-newsletter.png)

</div>

# Filament Newsletter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-newsletter.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-newsletter)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-newsletter/tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-newsletter/actions?query=workflow%3Atests+branch%3A2.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-newsletter/fix-php-code-style-issues.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-newsletter/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-newsletter.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-newsletter)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-newsletter.svg?style=flat-square)](LICENSE)

A Filament plugin for composing, scheduling, and sending newsletters to subscriber email groups, with delivery tracking and broken-link checks.

## Compatibility

| Version | Filament |
|---------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-newsletter/tree/1.x) | ^3.0 |
| [2.x](https://github.com/jeffersongoncalves/filament-newsletter/tree/2.x) | ^4.0 |
| [3.x](https://github.com/jeffersongoncalves/filament-newsletter/tree/3.x) | ^5.0 |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-newsletter:"^2.0"
```

Publish the configuration (optional):

```bash
php artisan vendor:publish --tag="filament-newsletter-config"
```

Publish the translations (optional):

```bash
php artisan vendor:publish --tag="filament-newsletter-translations"
```

## Usage

Register the plugin in your panel provider:

```php
use JeffersonGoncalves\FilamentNewsletter\FilamentNewsletterPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentNewsletterPlugin::make(),
        ]);
}
```

### Newsletters

The **Newsletter** resource lets you compose a newsletter with rich text, Markdown, or raw HTML content, attach files, target one or more email groups, and:

- **Send test** — deliver a single copy to an arbitrary email address before sending to your list.
- **Send now** — send the newsletter to every subscriber of the selected email groups immediately.
- **Schedule** — pick a date and time and the newsletter status moves to `scheduled`.
- **Sending status** — a read-only breakdown of sent vs. failed deliveries for the newsletter.
- **Check broken links** — scans the newsletter content for broken URLs and reports them.

### Email Groups

The **Email Group** resource manages named subscriber lists. Each group shows the number of confirmed, still-subscribed members, and has a relation manager for its members where you can toggle a member's unsubscribed state or remove them.

## Localization

Translations are provided for:

- English (`en`)
- Brazilian Portuguese (`pt_BR`)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
