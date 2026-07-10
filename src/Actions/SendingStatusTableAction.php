<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Actions;

use Filament\Tables\Actions\Action;
use JeffersonGoncalves\Newsletter\Enums\RecipientDeliveryStatus;
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
            ->modalContent(function (Newsletter $record) {
                /** @var view-string $viewName */
                $viewName = 'filament-newsletter::actions.sending-status';

                return view($viewName, [
                    'sent' => $record->sentRecipients()->where('status', RecipientDeliveryStatus::Sent)->count(),
                    'failed' => $record->sentRecipients()->where('status', RecipientDeliveryStatus::Failed)->count(),
                ]);
            })
            ->modalSubmitAction(false);
    }
}
