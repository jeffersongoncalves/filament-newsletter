<?php

return [
    'navigation' => [
        'newsletters' => 'Newsletter',
        'email_groups' => 'Gruppi email',
    ],
    'fields' => [
        'subject' => 'Oggetto',
        'sender_name' => 'Nome del mittente',
        'sender_email' => 'Email del mittente',
        'content_type' => 'Tipo di contenuto',
        'content' => 'Contenuto',
        'route' => 'Rotta',
        'published' => 'Pubblicata',
        'send_unsubscribe_link' => 'Invia link di disiscrizione',
        'send_webview_link' => 'Invia link alla versione web',
        'scheduled_at' => 'Programmata per',
        'sent_at' => 'Inviata il',
        'utm_campaign' => 'Campagna UTM',
        'email_groups' => 'Gruppi email',
        'attachments' => 'Allegati',
        'status' => 'Stato',
        'total_recipients' => 'Destinatari',
        'total_views' => 'Visualizzazioni',
        'title' => 'Titolo',
        'subscribers_count' => 'Iscritti',
        'email' => 'Email',
        'confirmed_at' => 'Confermato il',
        'unsubscribed' => 'Disiscritto',
    ],
    'content_types' => [
        'rich_text' => 'Testo formattato',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Bozza',
        'scheduled' => 'Programmata',
        'sending' => 'In invio',
        'sent' => 'Inviata',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Invia test',
            'modal_heading' => 'Invia una newsletter di prova',
            'email' => 'Email del destinatario',
            'sent_notification' => 'Email di prova inviata a :email',
        ],
        'send_now' => [
            'label' => 'Invia ora',
            'modal_heading' => 'Inviare questa newsletter ora?',
            'modal_description' => 'La newsletter verrà messa in coda per l\'invio a ogni iscritto dei gruppi email selezionati. Questa azione non può essere annullata.',
            'sent_notification' => 'Newsletter messa in coda per l\'invio',
        ],
        'schedule' => [
            'label' => 'Programma',
            'modal_heading' => 'Programma questa newsletter',
            'scheduled_at' => 'Invia il',
            'scheduled_notification' => 'Newsletter programmata',
        ],
        'sending_status' => [
            'label' => 'Stato dell\'invio',
            'modal_heading' => 'Stato dell\'invio',
            'sent' => 'Inviate',
            'failed' => 'Non riuscite',
            'no_data' => 'Questa newsletter non è ancora stata inviata.',
        ],
        'check_broken_links' => [
            'label' => 'Controlla link non funzionanti',
            'none_found_title' => 'Nessun link non funzionante trovato',
            'found_title' => 'Trovati link non funzionanti',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Attiva/disattiva disiscrizione',
        ],
    ],
];
