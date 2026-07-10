<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\RelationManagers;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use JeffersonGoncalves\Newsletter\Models\EmailGroupMember;

class MembersRelationManager extends RelationManager
{
    protected static string $relationship = 'members';

    public static function getTitle($ownerRecord, string $pageClass): string
    {
        return __('filament-newsletter::filament-newsletter.navigation.email_groups');
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('email')
            ->columns([
                TextColumn::make('email')
                    ->label(__('filament-newsletter::filament-newsletter.fields.email'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('confirmed_at')
                    ->label(__('filament-newsletter::filament-newsletter.fields.confirmed_at'))
                    ->dateTime()
                    ->sortable(),

                IconColumn::make('unsubscribed')
                    ->label(__('filament-newsletter::filament-newsletter.fields.unsubscribed'))
                    ->boolean()
                    ->sortable(),
            ])
            ->headerActions([])
            ->recordActions([
                Action::make('toggleUnsubscribed')
                    ->label(__('filament-newsletter::filament-newsletter.actions.toggle_unsubscribed.label'))
                    ->icon(Heroicon::OutlinedArrowPath)
                    ->action(fn (EmailGroupMember $record) => $record->update([
                        'unsubscribed' => ! $record->unsubscribed,
                        'unsubscribed_at' => $record->unsubscribed ? null : now(),
                    ])),

                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }
}
