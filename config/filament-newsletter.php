<?php

use JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource;
use JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource;

return [

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | Override any resource with your own implementation by setting the
    | corresponding key below to your custom resource's FQCN.
    |
    */
    'resources' => [
        'newsletter' => NewsletterResource::class,
        'email_group' => EmailGroupResource::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    */
    'navigation_group' => 'Newsletter',

    'navigation_sort' => null,

];
