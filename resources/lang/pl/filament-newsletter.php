<?php

return [
    'navigation' => [
        'newsletters' => 'Newslettery',
        'email_groups' => 'Grupy e-mail',
    ],
    'fields' => [
        'subject' => 'Temat',
        'sender_name' => 'Nazwa nadawcy',
        'sender_email' => 'E-mail nadawcy',
        'content_type' => 'Typ treści',
        'content' => 'Treść',
        'route' => 'Trasa',
        'published' => 'Opublikowany',
        'send_unsubscribe_link' => 'Wyślij link do wypisania',
        'send_webview_link' => 'Wyślij link do wersji web',
        'scheduled_at' => 'Zaplanowano na',
        'sent_at' => 'Wysłano',
        'utm_campaign' => 'Kampania UTM',
        'email_groups' => 'Grupy e-mail',
        'attachments' => 'Załączniki',
        'status' => 'Status',
        'total_recipients' => 'Odbiorcy',
        'total_views' => 'Wyświetlenia',
        'title' => 'Tytuł',
        'subscribers_count' => 'Subskrybenci',
        'email' => 'E-mail',
        'confirmed_at' => 'Potwierdzono',
        'unsubscribed' => 'Wypisany',
    ],
    'content_types' => [
        'rich_text' => 'Tekst sformatowany',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Szkic',
        'scheduled' => 'Zaplanowany',
        'sending' => 'Wysyłanie',
        'sent' => 'Wysłany',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Wyślij test',
            'modal_heading' => 'Wyślij testowy newsletter',
            'email' => 'E-mail odbiorcy',
            'sent_notification' => 'Testowy e-mail wysłany do :email',
        ],
        'send_now' => [
            'label' => 'Wyślij teraz',
            'modal_heading' => 'Wysłać ten newsletter teraz?',
            'modal_description' => 'Newsletter zostanie dodany do kolejki wysyłki do każdego subskrybenta w wybranych grupach e-mail. Tej operacji nie można cofnąć.',
            'sent_notification' => 'Newsletter dodany do kolejki wysyłki',
        ],
        'schedule' => [
            'label' => 'Zaplanuj',
            'modal_heading' => 'Zaplanuj ten newsletter',
            'scheduled_at' => 'Wyślij',
            'scheduled_notification' => 'Newsletter zaplanowany',
        ],
        'sending_status' => [
            'label' => 'Status wysyłki',
            'modal_heading' => 'Status wysyłki',
            'sent' => 'Wysłane',
            'failed' => 'Nieudane',
            'no_data' => 'Ten newsletter nie został jeszcze wysłany.',
        ],
        'check_broken_links' => [
            'label' => 'Sprawdź niedziałające linki',
            'none_found_title' => 'Nie znaleziono niedziałających linków',
            'found_title' => 'Znaleziono niedziałające linki',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Przełącz wypisanie',
        ],
    ],
];
