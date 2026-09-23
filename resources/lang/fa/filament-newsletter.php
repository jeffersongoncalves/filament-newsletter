<?php

return [
    'navigation' => [
        'newsletters' => 'خبرنامه‌ها',
        'email_groups' => 'گروه‌های ایمیل',
    ],
    'fields' => [
        'subject' => 'موضوع',
        'sender_name' => 'نام فرستنده',
        'sender_email' => 'ایمیل فرستنده',
        'content_type' => 'نوع محتوا',
        'content' => 'محتوا',
        'route' => 'مسیر',
        'published' => 'منتشرشده',
        'send_unsubscribe_link' => 'ارسال پیوند لغو اشتراک',
        'send_webview_link' => 'ارسال پیوند نمایش وب',
        'scheduled_at' => 'زمان‌بندی‌شده برای',
        'sent_at' => 'زمان ارسال',
        'utm_campaign' => 'کمپین UTM',
        'email_groups' => 'گروه‌های ایمیل',
        'attachments' => 'پیوست‌ها',
        'status' => 'وضعیت',
        'total_recipients' => 'گیرندگان',
        'total_views' => 'بازدیدها',
        'title' => 'عنوان',
        'subscribers_count' => 'مشترکان',
        'email' => 'ایمیل',
        'confirmed_at' => 'زمان تأیید',
        'unsubscribed' => 'لغو اشتراک‌شده',
    ],
    'content_types' => [
        'rich_text' => 'متن غنی',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'پیش‌نویس',
        'scheduled' => 'زمان‌بندی‌شده',
        'sending' => 'در حال ارسال',
        'sent' => 'ارسال‌شده',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'ارسال آزمایشی',
            'modal_heading' => 'ارسال خبرنامه آزمایشی',
            'email' => 'ایمیل گیرنده',
            'sent_notification' => 'ایمیل آزمایشی به :email ارسال شد',
        ],
        'send_now' => [
            'label' => 'ارسال اکنون',
            'modal_heading' => 'این خبرنامه اکنون ارسال شود؟',
            'modal_description' => 'این کار خبرنامه را برای تحویل به همه مشترکان گروه‌های ایمیل انتخاب‌شده در صف قرار می‌دهد. این عمل قابل بازگشت نیست.',
            'sent_notification' => 'خبرنامه در صف ارسال قرار گرفت',
        ],
        'schedule' => [
            'label' => 'زمان‌بندی',
            'modal_heading' => 'زمان‌بندی این خبرنامه',
            'scheduled_at' => 'زمان ارسال',
            'scheduled_notification' => 'خبرنامه زمان‌بندی شد',
        ],
        'sending_status' => [
            'label' => 'وضعیت ارسال',
            'modal_heading' => 'وضعیت ارسال',
            'sent' => 'ارسال‌شده',
            'failed' => 'ناموفق',
            'no_data' => 'این خبرنامه هنوز ارسال نشده است.',
        ],
        'check_broken_links' => [
            'label' => 'بررسی پیوندهای خراب',
            'none_found_title' => 'هیچ پیوند خرابی یافت نشد',
            'found_title' => 'پیوندهای خراب یافت شد',
        ],
        'toggle_unsubscribed' => [
            'label' => 'تغییر وضعیت لغو اشتراک',
        ],
    ],
];
