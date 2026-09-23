<?php

return [
    'navigation' => [
        'newsletters' => '新闻通讯',
        'email_groups' => '邮件分组',
    ],
    'fields' => [
        'subject' => '主题',
        'sender_name' => '发件人名称',
        'sender_email' => '发件人邮箱',
        'content_type' => '内容类型',
        'content' => '内容',
        'route' => '路由',
        'published' => '已发布',
        'send_unsubscribe_link' => '发送退订链接',
        'send_webview_link' => '发送网页版链接',
        'scheduled_at' => '计划时间',
        'sent_at' => '发送时间',
        'utm_campaign' => 'UTM 活动',
        'email_groups' => '邮件分组',
        'attachments' => '附件',
        'status' => '状态',
        'total_recipients' => '收件人',
        'total_views' => '浏览量',
        'title' => '标题',
        'subscribers_count' => '订阅者',
        'email' => '邮箱',
        'confirmed_at' => '确认时间',
        'unsubscribed' => '已退订',
    ],
    'content_types' => [
        'rich_text' => '富文本',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => '草稿',
        'scheduled' => '已计划',
        'sending' => '发送中',
        'sent' => '已发送',
    ],
    'actions' => [
        'send_test' => [
            'label' => '发送测试',
            'modal_heading' => '发送测试通讯',
            'email' => '收件人邮箱',
            'sent_notification' => '测试邮件已发送至 :email',
        ],
        'send_now' => [
            'label' => '立即发送',
            'modal_heading' => '立即发送此通讯？',
            'modal_description' => '这会将通讯加入队列，发送给所选邮件分组中的每位订阅者。此操作无法撤销。',
            'sent_notification' => '通讯已加入发送队列',
        ],
        'schedule' => [
            'label' => '计划发送',
            'modal_heading' => '计划发送此通讯',
            'scheduled_at' => '发送时间',
            'scheduled_notification' => '通讯已计划',
        ],
        'sending_status' => [
            'label' => '发送状态',
            'modal_heading' => '发送状态',
            'sent' => '已发送',
            'failed' => '失败',
            'no_data' => '此通讯尚未发送。',
        ],
        'check_broken_links' => [
            'label' => '检查失效链接',
            'none_found_title' => '未发现失效链接',
            'found_title' => '发现失效链接',
        ],
        'toggle_unsubscribed' => [
            'label' => '切换退订状态',
        ],
    ],
];
