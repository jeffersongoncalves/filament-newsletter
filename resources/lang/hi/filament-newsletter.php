<?php

return [
    'navigation' => [
        'newsletters' => 'न्यूज़लेटर',
        'email_groups' => 'ईमेल समूह',
    ],
    'fields' => [
        'subject' => 'विषय',
        'sender_name' => 'प्रेषक का नाम',
        'sender_email' => 'प्रेषक का ईमेल',
        'content_type' => 'सामग्री प्रकार',
        'content' => 'सामग्री',
        'route' => 'रूट',
        'published' => 'प्रकाशित',
        'send_unsubscribe_link' => 'सदस्यता समाप्ति लिंक भेजें',
        'send_webview_link' => 'वेब व्यू लिंक भेजें',
        'scheduled_at' => 'निर्धारित समय',
        'sent_at' => 'भेजा गया',
        'utm_campaign' => 'UTM अभियान',
        'email_groups' => 'ईमेल समूह',
        'attachments' => 'अटैचमेंट',
        'status' => 'स्थिति',
        'total_recipients' => 'प्राप्तकर्ता',
        'total_views' => 'व्यू',
        'title' => 'शीर्षक',
        'subscribers_count' => 'सदस्य',
        'email' => 'ईमेल',
        'confirmed_at' => 'पुष्टि की गई',
        'unsubscribed' => 'सदस्यता समाप्त',
    ],
    'content_types' => [
        'rich_text' => 'रिच टेक्स्ट',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'ड्राफ़्ट',
        'scheduled' => 'निर्धारित',
        'sending' => 'भेजा जा रहा है',
        'sent' => 'भेजा गया',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'टेस्ट भेजें',
            'modal_heading' => 'टेस्ट न्यूज़लेटर भेजें',
            'email' => 'प्राप्तकर्ता का ईमेल',
            'sent_notification' => 'टेस्ट ईमेल :email पर भेजा गया',
        ],
        'send_now' => [
            'label' => 'अभी भेजें',
            'modal_heading' => 'यह न्यूज़लेटर अभी भेजें?',
            'modal_description' => 'यह चयनित ईमेल समूहों के हर सदस्य को डिलीवरी के लिए न्यूज़लेटर को क्यू में डाल देगा। इस कार्रवाई को पूर्ववत नहीं किया जा सकता।',
            'sent_notification' => 'न्यूज़लेटर भेजने के लिए क्यू में डाला गया',
        ],
        'schedule' => [
            'label' => 'निर्धारित करें',
            'modal_heading' => 'यह न्यूज़लेटर निर्धारित करें',
            'scheduled_at' => 'भेजने का समय',
            'scheduled_notification' => 'न्यूज़लेटर निर्धारित किया गया',
        ],
        'sending_status' => [
            'label' => 'भेजने की स्थिति',
            'modal_heading' => 'भेजने की स्थिति',
            'sent' => 'भेजे गए',
            'failed' => 'विफल',
            'no_data' => 'यह न्यूज़लेटर अभी तक नहीं भेजा गया है।',
        ],
        'check_broken_links' => [
            'label' => 'टूटे लिंक जाँचें',
            'none_found_title' => 'कोई टूटा लिंक नहीं मिला',
            'found_title' => 'टूटे लिंक मिले',
        ],
        'toggle_unsubscribed' => [
            'label' => 'सदस्यता स्थिति बदलें',
        ],
    ],
];
