<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Get;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use JeffersonGoncalves\FilamentNewsletter\Actions\CheckBrokenLinksTableAction;
use JeffersonGoncalves\FilamentNewsletter\Actions\ScheduleNewsletterTableAction;
use JeffersonGoncalves\FilamentNewsletter\Actions\SendingStatusTableAction;
use JeffersonGoncalves\FilamentNewsletter\Actions\SendNewsletterTableAction;
use JeffersonGoncalves\FilamentNewsletter\Actions\SendTestNewsletterTableAction;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource\Pages;
use JeffersonGoncalves\Newsletter\Enums\NewsletterContentType;
use JeffersonGoncalves\Newsletter\Enums\NewsletterStatus;
use JeffersonGoncalves\Newsletter\Models\Newsletter;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function getNavigationGroup(): ?string
    {
        return __(config('filament-newsletter.navigation_group', 'Newsletter'));
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-newsletter.navigation_sort');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-newsletter::filament-newsletter.navigation.newsletters');
    }

    public static function form(Form $form): Form
    {
        return $form->schema(static::getFormSchema());
    }

    public static function getFormSchema(): array
    {
        return [
            TextInput::make('subject')
                ->label(__('filament-newsletter::filament-newsletter.fields.subject'))
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            TextInput::make('sender_name')
                ->label(__('filament-newsletter::filament-newsletter.fields.sender_name'))
                ->maxLength(255),

            TextInput::make('sender_email')
                ->label(__('filament-newsletter::filament-newsletter.fields.sender_email'))
                ->email()
                ->maxLength(255),

            Select::make('content_type')
                ->label(__('filament-newsletter::filament-newsletter.fields.content_type'))
                ->options([
                    NewsletterContentType::RichText->value => __('filament-newsletter::filament-newsletter.content_types.rich_text'),
                    NewsletterContentType::Markdown->value => __('filament-newsletter::filament-newsletter.content_types.markdown'),
                    NewsletterContentType::Html->value => __('filament-newsletter::filament-newsletter.content_types.html'),
                ])
                ->default(NewsletterContentType::RichText->value)
                ->required()
                ->live()
                ->columnSpanFull(),

            RichEditor::make('content')
                ->label(__('filament-newsletter::filament-newsletter.fields.content'))
                ->visible(fn (Get $get): bool => $get('content_type') === NewsletterContentType::RichText->value)
                ->columnSpanFull(),

            MarkdownEditor::make('content')
                ->label(__('filament-newsletter::filament-newsletter.fields.content'))
                ->visible(fn (Get $get): bool => $get('content_type') === NewsletterContentType::Markdown->value)
                ->columnSpanFull(),

            Textarea::make('content')
                ->label(__('filament-newsletter::filament-newsletter.fields.content'))
                ->visible(fn (Get $get): bool => $get('content_type') === NewsletterContentType::Html->value)
                ->rows(15)
                ->columnSpanFull(),

            TextInput::make('route')
                ->label(__('filament-newsletter::filament-newsletter.fields.route'))
                ->alphaDash()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            TextInput::make('utm_campaign')
                ->label(__('filament-newsletter::filament-newsletter.fields.utm_campaign'))
                ->maxLength(255),

            DateTimePicker::make('scheduled_at')
                ->label(__('filament-newsletter::filament-newsletter.fields.scheduled_at'))
                ->native(false),

            Toggle::make('published')
                ->label(__('filament-newsletter::filament-newsletter.fields.published')),

            Toggle::make('send_unsubscribe_link')
                ->label(__('filament-newsletter::filament-newsletter.fields.send_unsubscribe_link'))
                ->default(true),

            Toggle::make('send_webview_link')
                ->label(__('filament-newsletter::filament-newsletter.fields.send_webview_link'))
                ->default(true),

            Select::make('emailGroups')
                ->label(__('filament-newsletter::filament-newsletter.fields.email_groups'))
                ->relationship('emailGroups', 'title')
                ->multiple()
                ->preload()
                ->searchable()
                ->columnSpanFull(),

            SpatieMediaLibraryFileUpload::make('attachments')
                ->label(__('filament-newsletter::filament-newsletter.fields.attachments'))
                ->collection('attachments')
                ->multiple()
                ->columnSpanFull(),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject')
                    ->label(__('filament-newsletter::filament-newsletter.fields.subject'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('status')
                    ->label(__('filament-newsletter::filament-newsletter.fields.status'))
                    ->badge()
                    ->formatStateUsing(fn (NewsletterStatus $state): string => __('filament-newsletter::filament-newsletter.statuses.'.$state->value))
                    ->color(fn (NewsletterStatus $state): string => match ($state) {
                        NewsletterStatus::Draft => 'gray',
                        NewsletterStatus::Scheduled => 'warning',
                        NewsletterStatus::Sending => 'info',
                        NewsletterStatus::Sent => 'success',
                    }),

                TextColumn::make('total_recipients')
                    ->label(__('filament-newsletter::filament-newsletter.fields.total_recipients'))
                    ->numeric()
                    ->sortable(),

                TextColumn::make('total_views')
                    ->label(__('filament-newsletter::filament-newsletter.fields.total_views'))
                    ->numeric()
                    ->sortable(),

                TextColumn::make('scheduled_at')
                    ->label(__('filament-newsletter::filament-newsletter.fields.scheduled_at'))
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('sent_at')
                    ->label(__('filament-newsletter::filament-newsletter.fields.sent_at'))
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                SendTestNewsletterTableAction::make(),
                SendNewsletterTableAction::make(),
                ScheduleNewsletterTableAction::make(),
                SendingStatusTableAction::make(),
                CheckBrokenLinksTableAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletter::route('/create'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }
}
