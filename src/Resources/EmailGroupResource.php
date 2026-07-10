<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources;

use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\Pages;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\RelationManagers\MembersRelationManager;
use JeffersonGoncalves\Newsletter\Models\EmailGroup;

class EmailGroupResource extends Resource
{
    protected static ?string $model = EmailGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    public static function getNavigationGroup(): ?string
    {
        return __(config('filament-newsletter.navigation_group', 'Newsletter'));
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-newsletter::filament-newsletter.navigation.email_groups');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
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
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
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
