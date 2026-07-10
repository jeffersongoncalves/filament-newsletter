<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\Pages;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\RelationManagers\MembersRelationManager;
use JeffersonGoncalves\Newsletter\Models\EmailGroup;

class EmailGroupResource extends Resource
{
    protected static ?string $model = EmailGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function getNavigationGroup(): ?string
    {
        return __(config('filament-newsletter.navigation_group', 'Newsletter'));
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-newsletter::filament-newsletter.navigation.email_groups');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label(__('filament-newsletter::filament-newsletter.fields.title'))
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('filament-newsletter::filament-newsletter.fields.title'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('subscribers_count')
                    ->label(__('filament-newsletter::filament-newsletter.fields.subscribers_count'))
                    ->state(fn (EmailGroup $record): int => $record->members()
                        ->whereNotNull('confirmed_at')
                        ->where('unsubscribed', false)
                        ->count())
                    ->numeric(),
            ])
            ->defaultSort('title')
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            MembersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmailGroups::route('/'),
            'create' => Pages\CreateEmailGroup::route('/create'),
            'edit' => Pages\EditEmailGroup::route('/{record}/edit'),
        ];
    }
}
