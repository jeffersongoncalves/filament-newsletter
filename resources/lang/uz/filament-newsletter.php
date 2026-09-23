<?php

return [
    'navigation' => [
        'newsletters' => 'Axborotnomalar',
        'email_groups' => 'Pochta guruhlari',
    ],
    'fields' => [
        'subject' => 'Mavzu',
        'sender_name' => 'Yuboruvchi nomi',
        'sender_email' => 'Yuboruvchi pochtasi',
        'content_type' => 'Kontent turi',
        'content' => 'Kontent',
        'route' => 'Marshrut',
        'published' => 'Nashr qilingan',
        'send_unsubscribe_link' => 'Obunadan chiqish havolasini yuborish',
        'send_webview_link' => 'Veb-koʻrinish havolasini yuborish',
        'scheduled_at' => 'Rejalashtirilgan vaqt',
        'sent_at' => 'Yuborilgan vaqt',
        'utm_campaign' => 'UTM kampaniyasi',
        'email_groups' => 'Pochta guruhlari',
        'attachments' => 'Ilovalar',
        'status' => 'Holat',
        'total_recipients' => 'Qabul qiluvchilar',
        'total_views' => 'Koʻrishlar',
        'title' => 'Sarlavha',
        'subscribers_count' => 'Obunachilar',
        'email' => 'Elektron pochta',
        'confirmed_at' => 'Tasdiqlangan vaqt',
        'unsubscribed' => 'Obunadan chiqqan',
    ],
    'content_types' => [
        'rich_text' => 'Formatlangan matn',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Qoralama',
        'scheduled' => 'Rejalashtirilgan',
        'sending' => 'Yuborilmoqda',
        'sent' => 'Yuborilgan',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Test yuborish',
            'modal_heading' => 'Test axborotnomasini yuborish',
            'email' => 'Qabul qiluvchi pochtasi',
            'sent_notification' => 'Test xati :email manziliga yuborildi',
        ],
        'send_now' => [
            'label' => 'Hozir yuborish',
            'modal_heading' => 'Ushbu axborotnoma hozir yuborilsinmi?',
            'modal_description' => 'Axborotnoma tanlangan pochta guruhlaridagi har bir obunachiga yetkazish uchun navbatga qoʻyiladi. Bu amalni bekor qilib boʻlmaydi.',
            'sent_notification' => 'Axborotnoma yuborish navbatiga qoʻyildi',
        ],
        'schedule' => [
            'label' => 'Rejalashtirish',
            'modal_heading' => 'Ushbu axborotnomani rejalashtirish',
            'scheduled_at' => 'Yuborish vaqti',
            'scheduled_notification' => 'Axborotnoma rejalashtirildi',
        ],
        'sending_status' => [
            'label' => 'Yuborish holati',
            'modal_heading' => 'Yuborish holati',
            'sent' => 'Yuborilgan',
            'failed' => 'Muvaffaqiyatsiz',
            'no_data' => 'Ushbu axborotnoma hali yuborilmagan.',
        ],
        'check_broken_links' => [
            'label' => 'Buzilgan havolalarni tekshirish',
            'none_found_title' => 'Buzilgan havolalar topilmadi',
            'found_title' => 'Buzilgan havolalar topildi',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Obuna holatini almashtirish',
        ],
    ],
];
