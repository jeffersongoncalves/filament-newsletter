<?php

return [
    'navigation' => [
        'newsletters' => 'Рассылки',
        'email_groups' => 'Группы адресов',
    ],
    'fields' => [
        'subject' => 'Тема',
        'sender_name' => 'Имя отправителя',
        'sender_email' => 'Email отправителя',
        'content_type' => 'Тип содержимого',
        'content' => 'Содержимое',
        'route' => 'Маршрут',
        'published' => 'Опубликовано',
        'send_unsubscribe_link' => 'Отправлять ссылку для отписки',
        'send_webview_link' => 'Отправлять ссылку на веб-версию',
        'scheduled_at' => 'Запланировано на',
        'sent_at' => 'Отправлено',
        'utm_campaign' => 'UTM-кампания',
        'email_groups' => 'Группы адресов',
        'attachments' => 'Вложения',
        'status' => 'Статус',
        'total_recipients' => 'Получатели',
        'total_views' => 'Просмотры',
        'title' => 'Заголовок',
        'subscribers_count' => 'Подписчики',
        'email' => 'Email',
        'confirmed_at' => 'Подтверждено',
        'unsubscribed' => 'Отписан',
    ],
    'content_types' => [
        'rich_text' => 'Форматированный текст',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Черновик',
        'scheduled' => 'Запланировано',
        'sending' => 'Отправляется',
        'sent' => 'Отправлено',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Отправить тест',
            'modal_heading' => 'Отправить тестовую рассылку',
            'email' => 'Email получателя',
            'sent_notification' => 'Тестовое письмо отправлено на :email',
        ],
        'send_now' => [
            'label' => 'Отправить сейчас',
            'modal_heading' => 'Отправить эту рассылку сейчас?',
            'modal_description' => 'Рассылка будет поставлена в очередь для доставки всем подписчикам выбранных групп. Это действие нельзя отменить.',
            'sent_notification' => 'Рассылка поставлена в очередь на отправку',
        ],
        'schedule' => [
            'label' => 'Запланировать',
            'modal_heading' => 'Запланировать эту рассылку',
            'scheduled_at' => 'Отправить',
            'scheduled_notification' => 'Рассылка запланирована',
        ],
        'sending_status' => [
            'label' => 'Статус отправки',
            'modal_heading' => 'Статус отправки',
            'sent' => 'Отправлено',
            'failed' => 'Ошибка',
            'no_data' => 'Эта рассылка ещё не отправлялась.',
        ],
        'check_broken_links' => [
            'label' => 'Проверить битые ссылки',
            'none_found_title' => 'Битые ссылки не найдены',
            'found_title' => 'Найдены битые ссылки',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Переключить отписку',
        ],
    ],
];
