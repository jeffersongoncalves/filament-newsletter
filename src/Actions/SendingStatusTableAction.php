<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Actions;

use Filament\Tables\Actions\Action;
use JeffersonGoncalves\Newsletter\Enums\NewsletterSentRecipientStatus;
use JeffersonGoncalves\Newsletter\Models\Newsletter;

class SendingStatusTableAction
{
    public static function make(): Action
    {
        return Action::make('sendingStatus')
            ->label(__('filament-newsletter::filament-newsletter.actions.sending_status.label'))
            ->icon('heroicon-o-chart-bar')
            ->color('gray')
            ->modalHeading(__('filament-newsletter::filament-newsletter.actions.sending_status.modal_heading'))
            ->modalContent(fn (Newsletter $record) => view('filament-newsletter::actions.sending-status', [
                'sent' => $record->sentRecipients()->where('status', NewsletterSentRecipientStatus::Sent)->count(),
                'failed' => $record->sentRecipients()->where('status', NewsletterSentRecipientStatus::Failed)->count(),
            ]))
            ->modalSubmitAction(false);
    }
}
