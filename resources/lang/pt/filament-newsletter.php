<?php

return [
    'navigation' => [
        'newsletters' => 'Newsletters',
        'email_groups' => 'Grupos de e-mail',
    ],
    'fields' => [
        'subject' => 'Assunto',
        'sender_name' => 'Nome do remetente',
        'sender_email' => 'E-mail do remetente',
        'content_type' => 'Tipo de conteúdo',
        'content' => 'Conteúdo',
        'route' => 'Rota',
        'published' => 'Publicada',
        'send_unsubscribe_link' => 'Enviar link de cancelamento de subscrição',
        'send_webview_link' => 'Enviar link de visualização web',
        'scheduled_at' => 'Agendada para',
        'sent_at' => 'Enviada em',
        'utm_campaign' => 'Campanha UTM',
        'email_groups' => 'Grupos de e-mail',
        'attachments' => 'Anexos',
        'status' => 'Estado',
        'total_recipients' => 'Destinatários',
        'total_views' => 'Visualizações',
        'title' => 'Título',
        'subscribers_count' => 'Subscritores',
        'email' => 'E-mail',
        'confirmed_at' => 'Confirmado em',
        'unsubscribed' => 'Subscrição cancelada',
    ],
    'content_types' => [
        'rich_text' => 'Texto formatado',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Rascunho',
        'scheduled' => 'Agendada',
        'sending' => 'A enviar',
        'sent' => 'Enviada',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Enviar teste',
            'modal_heading' => 'Enviar uma newsletter de teste',
            'email' => 'E-mail do destinatário',
            'sent_notification' => 'E-mail de teste enviado para :email',
        ],
        'send_now' => [
            'label' => 'Enviar agora',
            'modal_heading' => 'Enviar esta newsletter agora?',
            'modal_description' => 'A newsletter será colocada em fila para entrega a todos os subscritores dos grupos de e-mail selecionados. Esta ação não pode ser anulada.',
            'sent_notification' => 'Newsletter colocada em fila para envio',
        ],
        'schedule' => [
            'label' => 'Agendar',
            'modal_heading' => 'Agendar esta newsletter',
            'scheduled_at' => 'Enviar em',
            'scheduled_notification' => 'Newsletter agendada',
        ],
        'sending_status' => [
            'label' => 'Estado do envio',
            'modal_heading' => 'Estado do envio',
            'sent' => 'Enviados',
            'failed' => 'Falhados',
            'no_data' => 'Esta newsletter ainda não foi enviada.',
        ],
        'check_broken_links' => [
            'label' => 'Verificar links quebrados',
            'none_found_title' => 'Nenhum link quebrado encontrado',
            'found_title' => 'Foram encontrados links quebrados',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Alternar cancelamento de subscrição',
        ],
    ],
];
