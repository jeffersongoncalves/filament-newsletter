<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource;

class CreateEmailGroup extends CreateRecord
{
    protected static string $resource = EmailGroupResource::class;
}
