<?php

declare(strict_types=1);

namespace JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource;

class CreateNewsletter extends CreateRecord
{
    protected static string $resource = NewsletterResource::class;
}
