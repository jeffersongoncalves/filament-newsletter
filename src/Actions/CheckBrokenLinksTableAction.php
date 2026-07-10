<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Actions;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use JeffersonGoncalves\Newsletter\Actions\FindBrokenNewsletterLinksAction;
use JeffersonGoncalves\Newsletter\Models\Newsletter;

class CheckBrokenLinksTableAction
{
    public static function make(): Action
    {
        return Action::make('checkBrokenLinks')
            ->label(__('filament-newsletter::filament-newsletter.actions.check_broken_links.label'))
            ->icon(Heroicon::OutlinedLinkSlash)
            ->color('gray')
            ->action(function (Newsletter $record): void {
                $brokenLinks = app(FindBrokenNewsletterLinksAction::class)->handle($record);

                if ($brokenLinks->isEmpty()) {
                    Notification::make()
                        ->title(__('filament-newsletter::filament-newsletter.actions.check_broken_links.none_found_title'))
                        ->success()
                        ->send();

                    return;
                }

                Notification::make()
                    ->title(__('filament-newsletter::filament-newsletter.actions.check_broken_links.found_title'))
                    ->body($brokenLinks->map(fn (array $link): string => $link['url'])->implode("\n"))
                    ->warning()
                    ->send();
            });
    }
}
