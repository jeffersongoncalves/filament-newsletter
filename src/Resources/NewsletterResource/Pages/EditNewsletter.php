<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource;

class EditNewsletter extends EditRecord
{
    protected static string $resource = NewsletterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data[NewsletterResource::contentFieldName($data['content_type'] ?? null)] = $data['content'] ?? null;

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return NewsletterResource::collapseContentField($data);
    }
}
