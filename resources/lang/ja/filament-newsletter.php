<?php

return [
    'navigation' => [
        'newsletters' => 'ニュースレター',
        'email_groups' => 'メールグループ',
    ],
    'fields' => [
        'subject' => '件名',
        'sender_name' => '送信者名',
        'sender_email' => '送信者メール',
        'content_type' => 'コンテンツの種類',
        'content' => '内容',
        'route' => 'ルート',
        'published' => '公開済み',
        'send_unsubscribe_link' => '配信停止リンクを送信',
        'send_webview_link' => 'Web 表示リンクを送信',
        'scheduled_at' => '予約日時',
        'sent_at' => '送信日時',
        'utm_campaign' => 'UTM キャンペーン',
        'email_groups' => 'メールグループ',
        'attachments' => '添付ファイル',
        'status' => 'ステータス',
        'total_recipients' => '受信者',
        'total_views' => '閲覧数',
        'title' => 'タイトル',
        'subscribers_count' => '購読者',
        'email' => 'メール',
        'confirmed_at' => '確認日時',
        'unsubscribed' => '配信停止済み',
    ],
    'content_types' => [
        'rich_text' => 'リッチテキスト',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => '下書き',
        'scheduled' => '予約済み',
        'sending' => '送信中',
        'sent' => '送信済み',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'テスト送信',
            'modal_heading' => 'テストニュースレターを送信',
            'email' => '受信者のメール',
            'sent_notification' => ':email にテストメールを送信しました',
        ],
        'send_now' => [
            'label' => '今すぐ送信',
            'modal_heading' => 'このニュースレターを今すぐ送信しますか？',
            'modal_description' => '選択したメールグループのすべての購読者への配信キューに追加されます。この操作は元に戻せません。',
            'sent_notification' => 'ニュースレターを送信キューに追加しました',
        ],
        'schedule' => [
            'label' => '予約',
            'modal_heading' => 'このニュースレターを予約',
            'scheduled_at' => '送信日時',
            'scheduled_notification' => 'ニュースレターを予約しました',
        ],
        'sending_status' => [
            'label' => '送信状況',
            'modal_heading' => '送信状況',
            'sent' => '送信済み',
            'failed' => '失敗',
            'no_data' => 'このニュースレターはまだ送信されていません。',
        ],
        'check_broken_links' => [
            'label' => 'リンク切れを確認',
            'none_found_title' => 'リンク切れは見つかりませんでした',
            'found_title' => 'リンク切れが見つかりました',
        ],
        'toggle_unsubscribed' => [
            'label' => '配信停止を切り替え',
        ],
    ],
];
