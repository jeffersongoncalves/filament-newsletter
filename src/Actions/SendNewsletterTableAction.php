<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Actions;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use JeffersonGoncalves\Newsletter\Actions\SendNewsletterAction;
use JeffersonGoncalves\Newsletter\Enums\NewsletterStatus;
use JeffersonGoncalves\Newsletter\Models\Newsletter;

class SendNewsletterTableAction
{
    public static function make(): Action
    {
        return Action::make('sendNow')
            ->label(__('filament-newsletter::filament-newsletter.actions.send_now.label'))
            ->icon(Heroicon::OutlinedPaperAirplane)
            ->color('success')
            ->requiresConfirmation()
            ->modalHeading(__('filament-newsletter::filament-newsletter.actions.send_now.modal_heading'))
            ->modalDescription(__('filament-newsletter::filament-newsletter.actions.send_now.modal_description'))
            ->visible(fn (Newsletter $record): bool => ! in_array($record->status, [NewsletterStatus::Sending, NewsletterStatus::Sent], true))
            ->action(function (Newsletter $record): void {
                app(SendNewsletterAction::class)->handle($record);

                Notification::make()
                    ->title(__('filament-newsletter::filament-newsletter.actions.send_now.sent_notification'))
                    ->success()
                    ->send();
            });
    }
}
