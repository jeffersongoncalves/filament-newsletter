# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/jeffersongoncalves/filament-newsletter/compare/1.1.0...1.x)

## [1.1.0](https://github.com/jeffersongoncalves/filament-newsletter/compare/1.0.0...1.1.0) - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#22)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-newsletter/pull/4
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-newsletter/pull/7
* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-newsletter/pull/9
* chore(deps): bump actions/checkout from 6.1.0 to 7.0.1 in the actions-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-newsletter/pull/13
* chore(deps): update jeffersongoncalves/laravel-newsletter requirement from ^1.0 to ^2.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-newsletter/pull/14
* ci: standardize tests workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-newsletter/pull/19
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-newsletter/pull/22

**Full Changelog**: https://github.com/jeffersongoncalves/filament-newsletter/compare/1.0.0...1.1.0

## [1.0.0](https://github.com/jeffersongoncalves/filament-newsletter/releases/tag/1.0.0) - YYYY-MM-DD

### Added

- `NewsletterResource` — compose newsletters with Rich Text, Markdown, or HTML content, target email groups, attach files, and manage scheduling
- `EmailGroupResource` — manage subscriber lists with a live subscriber count and a members relation manager
- Send test, send now, schedule, sending status, and check broken links actions for newsletters
- Toggle unsubscribed action and delete for email group members
- Translations: English and Brazilian Portuguese
