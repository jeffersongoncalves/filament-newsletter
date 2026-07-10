<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource;

class ListEmailGroups extends ListRecords
{
    protected static string $resource = EmailGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
