<?php

return [
    'navigation' => [
        'newsletters' => 'Bülletenlər',
        'email_groups' => 'E-poçt qrupları',
    ],
    'fields' => [
        'subject' => 'Mövzu',
        'sender_name' => 'Göndərənin adı',
        'sender_email' => 'Göndərənin e-poçtu',
        'content_type' => 'Məzmun növü',
        'content' => 'Məzmun',
        'route' => 'Marşrut',
        'published' => 'Dərc edilib',
        'send_unsubscribe_link' => 'Abunəlikdən çıxma keçidini göndər',
        'send_webview_link' => 'Veb görünüş keçidini göndər',
        'scheduled_at' => 'Planlaşdırılıb',
        'sent_at' => 'Göndərilib',
        'utm_campaign' => 'UTM kampaniyası',
        'email_groups' => 'E-poçt qrupları',
        'attachments' => 'Qoşmalar',
        'status' => 'Status',
        'total_recipients' => 'Alıcılar',
        'total_views' => 'Baxışlar',
        'title' => 'Başlıq',
        'subscribers_count' => 'Abunəçilər',
        'email' => 'E-poçt',
        'confirmed_at' => 'Təsdiqlənib',
        'unsubscribed' => 'Abunəlikdən çıxıb',
    ],
    'content_types' => [
        'rich_text' => 'Formatlı mətn',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Qaralama',
        'scheduled' => 'Planlaşdırılıb',
        'sending' => 'Göndərilir',
        'sent' => 'Göndərilib',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Test göndər',
            'modal_heading' => 'Test bülleteni göndər',
            'email' => 'Alıcının e-poçtu',
            'sent_notification' => 'Test e-poçtu :email ünvanına göndərildi',
        ],
        'send_now' => [
            'label' => 'İndi göndər',
            'modal_heading' => 'Bu bülleten indi göndərilsin?',
            'modal_description' => 'Bu, bülleteni seçilmiş e-poçt qruplarındakı hər abunəçiyə çatdırılmaq üçün növbəyə əlavə edəcək. Bu əməliyyat geri qaytarıla bilməz.',
            'sent_notification' => 'Bülleten göndərilmə növbəsinə əlavə edildi',
        ],
        'schedule' => [
            'label' => 'Planlaşdır',
            'modal_heading' => 'Bu bülleteni planlaşdır',
            'scheduled_at' => 'Göndərmə vaxtı',
            'scheduled_notification' => 'Bülleten planlaşdırıldı',
        ],
        'sending_status' => [
            'label' => 'Göndərmə statusu',
            'modal_heading' => 'Göndərmə statusu',
            'sent' => 'Göndərilib',
            'failed' => 'Uğursuz',
            'no_data' => 'Bu bülleten hələ göndərilməyib.',
        ],
        'check_broken_links' => [
            'label' => 'Qırıq keçidləri yoxla',
            'none_found_title' => 'Qırıq keçid tapılmadı',
            'found_title' => 'Qırıq keçidlər tapıldı',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Abunəlik statusunu dəyiş',
        ],
    ],
];
