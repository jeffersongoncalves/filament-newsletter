<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Actions;

use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use JeffersonGoncalves\Newsletter\Actions\SendTestNewsletterAction;
use JeffersonGoncalves\Newsletter\Models\Newsletter;

class SendTestNewsletterTableAction
{
    public static function make(): Action
    {
        return Action::make('sendTest')
            ->label(__('filament-newsletter::filament-newsletter.actions.send_test.label'))
            ->icon(Heroicon::OutlinedPaperAirplane)
            ->modalHeading(__('filament-newsletter::filament-newsletter.actions.send_test.modal_heading'))
            ->form([
                TextInput::make('email')
                    ->label(__('filament-newsletter::filament-newsletter.actions.send_test.email'))
                    ->email()
                    ->required(),
            ])
            ->action(function (Newsletter $record, array $data): void {
                app(SendTestNewsletterAction::class)($record, $data['email']);

                Notification::make()
                    ->title(__('filament-newsletter::filament-newsletter.actions.send_test.sent_notification', ['email' => $data['email']]))
                    ->success()
                    ->send();
            });
    }
}
