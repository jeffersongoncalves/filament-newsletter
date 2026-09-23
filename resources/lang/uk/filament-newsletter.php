<?php

return [
    'navigation' => [
        'newsletters' => 'Розсилки',
        'email_groups' => 'Групи адрес',
    ],
    'fields' => [
        'subject' => 'Тема',
        'sender_name' => 'Ім\'я відправника',
        'sender_email' => 'Email відправника',
        'content_type' => 'Тип вмісту',
        'content' => 'Вміст',
        'route' => 'Маршрут',
        'published' => 'Опубліковано',
        'send_unsubscribe_link' => 'Надсилати посилання для відписки',
        'send_webview_link' => 'Надсилати посилання на веб-версію',
        'scheduled_at' => 'Заплановано на',
        'sent_at' => 'Надіслано',
        'utm_campaign' => 'UTM-кампанія',
        'email_groups' => 'Групи адрес',
        'attachments' => 'Вкладення',
        'status' => 'Статус',
        'total_recipients' => 'Одержувачі',
        'total_views' => 'Перегляди',
        'title' => 'Заголовок',
        'subscribers_count' => 'Підписники',
        'email' => 'Email',
        'confirmed_at' => 'Підтверджено',
        'unsubscribed' => 'Відписаний',
    ],
    'content_types' => [
        'rich_text' => 'Форматований текст',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Чернетка',
        'scheduled' => 'Заплановано',
        'sending' => 'Надсилається',
        'sent' => 'Надіслано',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Надіслати тест',
            'modal_heading' => 'Надіслати тестову розсилку',
            'email' => 'Email одержувача',
            'sent_notification' => 'Тестовий лист надіслано на :email',
        ],
        'send_now' => [
            'label' => 'Надіслати зараз',
            'modal_heading' => 'Надіслати цю розсилку зараз?',
            'modal_description' => 'Розсилку буде поставлено в чергу для доставки всім підписникам вибраних груп. Цю дію не можна скасувати.',
            'sent_notification' => 'Розсилку поставлено в чергу на надсилання',
        ],
        'schedule' => [
            'label' => 'Запланувати',
            'modal_heading' => 'Запланувати цю розсилку',
            'scheduled_at' => 'Надіслати',
            'scheduled_notification' => 'Розсилку заплановано',
        ],
        'sending_status' => [
            'label' => 'Статус надсилання',
            'modal_heading' => 'Статус надсилання',
            'sent' => 'Надіслано',
            'failed' => 'Помилка',
            'no_data' => 'Цю розсилку ще не надсилали.',
        ],
        'check_broken_links' => [
            'label' => 'Перевірити биті посилання',
            'none_found_title' => 'Битих посилань не знайдено',
            'found_title' => 'Знайдено биті посилання',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Перемкнути відписку',
        ],
    ],
];
