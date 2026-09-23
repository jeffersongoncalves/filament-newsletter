<?php

return [
    'navigation' => [
        'newsletters' => 'Newsletter',
        'email_groups' => 'E-Mail-Gruppen',
    ],
    'fields' => [
        'subject' => 'Betreff',
        'sender_name' => 'Absendername',
        'sender_email' => 'Absender-E-Mail',
        'content_type' => 'Inhaltstyp',
        'content' => 'Inhalt',
        'route' => 'Route',
        'published' => 'Veröffentlicht',
        'send_unsubscribe_link' => 'Abmeldelink senden',
        'send_webview_link' => 'Link zur Webansicht senden',
        'scheduled_at' => 'Geplant für',
        'sent_at' => 'Gesendet am',
        'utm_campaign' => 'UTM-Kampagne',
        'email_groups' => 'E-Mail-Gruppen',
        'attachments' => 'Anhänge',
        'status' => 'Status',
        'total_recipients' => 'Empfänger',
        'total_views' => 'Aufrufe',
        'title' => 'Titel',
        'subscribers_count' => 'Abonnenten',
        'email' => 'E-Mail',
        'confirmed_at' => 'Bestätigt am',
        'unsubscribed' => 'Abgemeldet',
    ],
    'content_types' => [
        'rich_text' => 'Rich Text',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Entwurf',
        'scheduled' => 'Geplant',
        'sending' => 'Wird gesendet',
        'sent' => 'Gesendet',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Test senden',
            'modal_heading' => 'Test-Newsletter senden',
            'email' => 'Empfänger-E-Mail',
            'sent_notification' => 'Test-E-Mail an :email gesendet',
        ],
        'send_now' => [
            'label' => 'Jetzt senden',
            'modal_heading' => 'Diesen Newsletter jetzt senden?',
            'modal_description' => 'Der Newsletter wird für die Zustellung an alle Abonnenten der ausgewählten E-Mail-Gruppen in die Warteschlange gestellt. Diese Aktion kann nicht rückgängig gemacht werden.',
            'sent_notification' => 'Newsletter zum Versand eingereiht',
        ],
        'schedule' => [
            'label' => 'Planen',
            'modal_heading' => 'Diesen Newsletter planen',
            'scheduled_at' => 'Senden am',
            'scheduled_notification' => 'Newsletter geplant',
        ],
        'sending_status' => [
            'label' => 'Versandstatus',
            'modal_heading' => 'Versandstatus',
            'sent' => 'Gesendet',
            'failed' => 'Fehlgeschlagen',
            'no_data' => 'Dieser Newsletter wurde noch nicht gesendet.',
        ],
        'check_broken_links' => [
            'label' => 'Defekte Links prüfen',
            'none_found_title' => 'Keine defekten Links gefunden',
            'found_title' => 'Defekte Links gefunden',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Abmeldung umschalten',
        ],
    ],
];
