<?php

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
        'newsletter' => \JeffersonGoncalves\FilamentNewsletter\Resources\NewsletterResource::class,
        'email_group' => \JeffersonGoncalves\FilamentNewsletter\Resources\EmailGroupResource::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    */
    'navigation_group' => 'Newsletter',

    'navigation_sort' => null,

];
