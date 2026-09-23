<?php

return [
    'navigation' => [
        'newsletters' => 'Nieuwsbrieven',
        'email_groups' => 'E-mailgroepen',
    ],
    'fields' => [
        'subject' => 'Onderwerp',
        'sender_name' => 'Naam afzender',
        'sender_email' => 'E-mail afzender',
        'content_type' => 'Inhoudstype',
        'content' => 'Inhoud',
        'route' => 'Route',
        'published' => 'Gepubliceerd',
        'send_unsubscribe_link' => 'Afmeldlink meesturen',
        'send_webview_link' => 'Link naar webversie meesturen',
        'scheduled_at' => 'Gepland op',
        'sent_at' => 'Verzonden op',
        'utm_campaign' => 'UTM-campagne',
        'email_groups' => 'E-mailgroepen',
        'attachments' => 'Bijlagen',
        'status' => 'Status',
        'total_recipients' => 'Ontvangers',
        'total_views' => 'Weergaven',
        'title' => 'Titel',
        'subscribers_count' => 'Abonnees',
        'email' => 'E-mail',
        'confirmed_at' => 'Bevestigd op',
        'unsubscribed' => 'Afgemeld',
    ],
    'content_types' => [
        'rich_text' => 'Opgemaakte tekst',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Concept',
        'scheduled' => 'Gepland',
        'sending' => 'Wordt verzonden',
        'sent' => 'Verzonden',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Test verzenden',
            'modal_heading' => 'Testnieuwsbrief verzenden',
            'email' => 'E-mail ontvanger',
            'sent_notification' => 'Test-e-mail verzonden naar :email',
        ],
        'send_now' => [
            'label' => 'Nu verzenden',
            'modal_heading' => 'Deze nieuwsbrief nu verzenden?',
            'modal_description' => 'De nieuwsbrief wordt in de wachtrij gezet voor verzending naar elke abonnee in de geselecteerde e-mailgroepen. Deze actie kan niet ongedaan worden gemaakt.',
            'sent_notification' => 'Nieuwsbrief in de wachtrij gezet voor verzending',
        ],
        'schedule' => [
            'label' => 'Plannen',
            'modal_heading' => 'Deze nieuwsbrief plannen',
            'scheduled_at' => 'Verzenden op',
            'scheduled_notification' => 'Nieuwsbrief gepland',
        ],
        'sending_status' => [
            'label' => 'Verzendstatus',
            'modal_heading' => 'Verzendstatus',
            'sent' => 'Verzonden',
            'failed' => 'Mislukt',
            'no_data' => 'Deze nieuwsbrief is nog niet verzonden.',
        ],
        'check_broken_links' => [
            'label' => 'Controleren op kapotte links',
            'none_found_title' => 'Geen kapotte links gevonden',
            'found_title' => 'Kapotte links gevonden',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Afmelding omschakelen',
        ],
    ],
];
