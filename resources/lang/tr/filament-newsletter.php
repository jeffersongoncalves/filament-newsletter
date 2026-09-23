<?php

return [
    'navigation' => [
        'newsletters' => 'Bültenler',
        'email_groups' => 'E-posta grupları',
    ],
    'fields' => [
        'subject' => 'Konu',
        'sender_name' => 'Gönderen adı',
        'sender_email' => 'Gönderen e-postası',
        'content_type' => 'İçerik türü',
        'content' => 'İçerik',
        'route' => 'Rota',
        'published' => 'Yayınlandı',
        'send_unsubscribe_link' => 'Abonelikten çıkma bağlantısı gönder',
        'send_webview_link' => 'Web görünümü bağlantısı gönder',
        'scheduled_at' => 'Planlanan tarih',
        'sent_at' => 'Gönderilme tarihi',
        'utm_campaign' => 'UTM kampanyası',
        'email_groups' => 'E-posta grupları',
        'attachments' => 'Ekler',
        'status' => 'Durum',
        'total_recipients' => 'Alıcılar',
        'total_views' => 'Görüntülemeler',
        'title' => 'Başlık',
        'subscribers_count' => 'Aboneler',
        'email' => 'E-posta',
        'confirmed_at' => 'Onaylanma tarihi',
        'unsubscribed' => 'Abonelikten çıktı',
    ],
    'content_types' => [
        'rich_text' => 'Zengin metin',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Taslak',
        'scheduled' => 'Planlandı',
        'sending' => 'Gönderiliyor',
        'sent' => 'Gönderildi',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Test gönder',
            'modal_heading' => 'Test bülteni gönder',
            'email' => 'Alıcı e-postası',
            'sent_notification' => 'Test e-postası :email adresine gönderildi',
        ],
        'send_now' => [
            'label' => 'Şimdi gönder',
            'modal_heading' => 'Bu bülten şimdi gönderilsin mi?',
            'modal_description' => 'Bülten, seçilen e-posta gruplarındaki her aboneye teslim edilmek üzere kuyruğa alınacak. Bu işlem geri alınamaz.',
            'sent_notification' => 'Bülten gönderim için kuyruğa alındı',
        ],
        'schedule' => [
            'label' => 'Planla',
            'modal_heading' => 'Bu bülteni planla',
            'scheduled_at' => 'Gönderim tarihi',
            'scheduled_notification' => 'Bülten planlandı',
        ],
        'sending_status' => [
            'label' => 'Gönderim durumu',
            'modal_heading' => 'Gönderim durumu',
            'sent' => 'Gönderildi',
            'failed' => 'Başarısız',
            'no_data' => 'Bu bülten henüz gönderilmedi.',
        ],
        'check_broken_links' => [
            'label' => 'Kırık bağlantıları kontrol et',
            'none_found_title' => 'Kırık bağlantı bulunamadı',
            'found_title' => 'Kırık bağlantılar bulundu',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Abonelik durumunu değiştir',
        ],
    ],
];
