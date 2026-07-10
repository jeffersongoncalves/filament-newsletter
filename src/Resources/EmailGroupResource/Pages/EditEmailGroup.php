<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource;

class EditEmailGroup extends EditRecord
{
    protected static string $resource = EmailGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
