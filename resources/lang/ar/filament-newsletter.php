<?php

return [
    'navigation' => [
        'newsletters' => 'النشرات البريدية',
        'email_groups' => 'مجموعات البريد',
    ],
    'fields' => [
        'subject' => 'الموضوع',
        'sender_name' => 'اسم المرسل',
        'sender_email' => 'بريد المرسل',
        'content_type' => 'نوع المحتوى',
        'content' => 'المحتوى',
        'route' => 'المسار',
        'published' => 'منشورة',
        'send_unsubscribe_link' => 'إرسال رابط إلغاء الاشتراك',
        'send_webview_link' => 'إرسال رابط العرض على الويب',
        'scheduled_at' => 'مجدولة في',
        'sent_at' => 'أُرسلت في',
        'utm_campaign' => 'حملة UTM',
        'email_groups' => 'مجموعات البريد',
        'attachments' => 'المرفقات',
        'status' => 'الحالة',
        'total_recipients' => 'المستلمون',
        'total_views' => 'المشاهدات',
        'title' => 'العنوان',
        'subscribers_count' => 'المشتركون',
        'email' => 'البريد الإلكتروني',
        'confirmed_at' => 'تم التأكيد في',
        'unsubscribed' => 'ألغى الاشتراك',
    ],
    'content_types' => [
        'rich_text' => 'نص منسق',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'مسودة',
        'scheduled' => 'مجدولة',
        'sending' => 'قيد الإرسال',
        'sent' => 'مُرسلة',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'إرسال تجربة',
            'modal_heading' => 'إرسال نشرة تجريبية',
            'email' => 'بريد المستلم',
            'sent_notification' => 'تم إرسال البريد التجريبي إلى :email',
        ],
        'send_now' => [
            'label' => 'إرسال الآن',
            'modal_heading' => 'إرسال هذه النشرة الآن؟',
            'modal_description' => 'سيؤدي هذا إلى وضع النشرة في طابور التسليم لكل مشترك في مجموعات البريد المحددة. لا يمكن التراجع عن هذا الإجراء.',
            'sent_notification' => 'تمت إضافة النشرة إلى طابور الإرسال',
        ],
        'schedule' => [
            'label' => 'جدولة',
            'modal_heading' => 'جدولة هذه النشرة',
            'scheduled_at' => 'الإرسال في',
            'scheduled_notification' => 'تمت جدولة النشرة',
        ],
        'sending_status' => [
            'label' => 'حالة الإرسال',
            'modal_heading' => 'حالة الإرسال',
            'sent' => 'مُرسلة',
            'failed' => 'فشلت',
            'no_data' => 'لم يتم إرسال هذه النشرة بعد.',
        ],
        'check_broken_links' => [
            'label' => 'فحص الروابط المعطلة',
            'none_found_title' => 'لم يتم العثور على روابط معطلة',
            'found_title' => 'تم العثور على روابط معطلة',
        ],
        'toggle_unsubscribed' => [
            'label' => 'تبديل إلغاء الاشتراك',
        ],
    ],
];
