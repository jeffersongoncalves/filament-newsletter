<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Actions;

use Filament\Forms\Components\DateTimePicker;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use JeffersonGoncalves\Newsletter\Enums\NewsletterStatus;
use JeffersonGoncalves\Newsletter\Models\Newsletter;

class ScheduleNewsletterTableAction
{
    public static function make(): Action
    {
        return Action::make('schedule')
            ->label(__('filament-newsletter::filament-newsletter.actions.schedule.label'))
            ->icon('heroicon-o-clock')
            ->modalHeading(__('filament-newsletter::filament-newsletter.actions.schedule.modal_heading'))
            ->form([
                DateTimePicker::make('scheduled_at')
                    ->label(__('filament-newsletter::filament-newsletter.actions.schedule.scheduled_at'))
                    ->native(false)
                    ->minDate(now())
                    ->required(),
            ])
            ->fillForm(fn (Newsletter $record): array => ['scheduled_at' => $record->scheduled_at])
            ->visible(fn (Newsletter $record): bool => ! in_array($record->status, [NewsletterStatus::Sending, NewsletterStatus::Sent], true))
            ->action(function (Newsletter $record, array $data): void {
                $record->update([
                    'scheduled_at' => $data['scheduled_at'],
                    'status' => NewsletterStatus::Scheduled,
                ]);

                Notification::make()
                    ->title(__('filament-newsletter::filament-newsletter.actions.schedule.scheduled_notification'))
                    ->success()
                    ->send();
            });
    }
}
