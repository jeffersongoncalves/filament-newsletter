<?php

return [

    'navigation' => [
        'newsletters' => 'Newsletters',
        'email_groups' => 'Email Groups',
    ],

    'fields' => [
        'subject' => 'Subject',
        'sender_name' => 'Sender name',
        'sender_email' => 'Sender email',
        'content_type' => 'Content type',
        'content' => 'Content',
        'route' => 'Route',
        'published' => 'Published',
        'send_unsubscribe_link' => 'Send unsubscribe link',
        'send_webview_link' => 'Send web view link',
        'scheduled_at' => 'Scheduled at',
        'sent_at' => 'Sent at',
        'utm_campaign' => 'UTM campaign',
        'email_groups' => 'Email groups',
        'attachments' => 'Attachments',
        'status' => 'Status',
        'total_recipients' => 'Recipients',
        'total_views' => 'Views',
        'title' => 'Title',
        'subscribers_count' => 'Subscribers',
        'email' => 'Email',
        'confirmed_at' => 'Confirmed at',
        'unsubscribed' => 'Unsubscribed',
    ],

    'content_types' => [
        'rich_text' => 'Rich Text',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],

    'statuses' => [
        'draft' => 'Draft',
        'scheduled' => 'Scheduled',
        'sending' => 'Sending',
        'sent' => 'Sent',
    ],

    'actions' => [
        'send_test' => [
            'label' => 'Send test',
            'modal_heading' => 'Send a test newsletter',
            'email' => 'Recipient email',
            'sent_notification' => 'Test email sent to :email',
        ],
        'send_now' => [
            'label' => 'Send now',
            'modal_heading' => 'Send this newsletter now?',
            'modal_description' => 'This will queue the newsletter for delivery to every subscriber in the selected email groups. This action cannot be undone.',
            'sent_notification' => 'Newsletter queued for sending',
        ],
        'schedule' => [
            'label' => 'Schedule',
            'modal_heading' => 'Schedule this newsletter',
            'scheduled_at' => 'Send at',
            'scheduled_notification' => 'Newsletter scheduled',
        ],
        'sending_status' => [
            'label' => 'Sending status',
            'modal_heading' => 'Sending status',
            'sent' => 'Sent',
            'failed' => 'Failed',
            'no_data' => 'This newsletter has not been sent yet.',
        ],
        'check_broken_links' => [
            'label' => 'Check broken links',
            'none_found_title' => 'No broken links found',
            'found_title' => 'Broken links found',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Toggle unsubscribed',
        ],
    ],

];
