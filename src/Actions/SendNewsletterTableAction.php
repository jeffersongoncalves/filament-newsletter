<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Actions;

use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use JeffersonGoncalves\Newsletter\Actions\SendNewsletterAction;
use JeffersonGoncalves\Newsletter\Enums\NewsletterStatus;
use JeffersonGoncalves\Newsletter\Models\Newsletter;

class SendNewsletterTableAction
{
    public static function make(): Action
    {
        return Action::make('sendNow')
            ->label(__('filament-newsletter::filament-newsletter.actions.send_now.label'))
            ->icon('heroicon-o-paper-airplane')
            ->color('success')
            ->requiresConfirmation()
            ->modalHeading(__('filament-newsletter::filament-newsletter.actions.send_now.modal_heading'))
            ->modalDescription(__('filament-newsletter::filament-newsletter.actions.send_now.modal_description'))
            ->visible(fn (Newsletter $record): bool => ! in_array($record->status, [NewsletterStatus::Sending, NewsletterStatus::Sent], true))
            ->action(function (Newsletter $record): void {
                app(SendNewsletterAction::class)($record);

                Notification::make()
                    ->title(__('filament-newsletter::filament-newsletter.actions.send_now.sent_notification'))
                    ->success()
                    ->send();
            });
    }
}
