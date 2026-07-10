<?php

return [

    'navigation' => [
        'newsletters' => 'Newsletters',
        'email_groups' => 'Grupos de E-mail',
    ],

    'fields' => [
        'subject' => 'Assunto',
        'sender_name' => 'Nome do remetente',
        'sender_email' => 'E-mail do remetente',
        'content_type' => 'Tipo de conteúdo',
        'content' => 'Conteúdo',
        'route' => 'Rota',
        'published' => 'Publicado',
        'send_unsubscribe_link' => 'Enviar link de descadastro',
        'send_webview_link' => 'Enviar link de visualização web',
        'scheduled_at' => 'Agendado para',
        'sent_at' => 'Enviado em',
        'utm_campaign' => 'Campanha UTM',
        'email_groups' => 'Grupos de e-mail',
        'attachments' => 'Anexos',
        'status' => 'Status',
        'total_recipients' => 'Destinatários',
        'total_views' => 'Visualizações',
        'title' => 'Título',
        'subscribers_count' => 'Inscritos',
        'email' => 'E-mail',
        'confirmed_at' => 'Confirmado em',
        'unsubscribed' => 'Descadastrado',
    ],

    'content_types' => [
        'rich_text' => 'Texto Rico',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'scheduled' => 'Agendado',
        'sending' => 'Enviando',
        'sent' => 'Enviado',
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
            'modal_description' => 'Isso enfileirará a newsletter para envio a todos os inscritos dos grupos de e-mail selecionados. Esta ação não pode ser desfeita.',
            'sent_notification' => 'Newsletter enfileirada para envio',
        ],
        'schedule' => [
            'label' => 'Agendar',
            'modal_heading' => 'Agendar esta newsletter',
            'scheduled_at' => 'Enviar em',
            'scheduled_notification' => 'Newsletter agendada',
        ],
        'sending_status' => [
            'label' => 'Status de envio',
            'modal_heading' => 'Status de envio',
            'sent' => 'Enviados',
            'failed' => 'Falhas',
            'no_data' => 'Esta newsletter ainda não foi enviada.',
        ],
        'check_broken_links' => [
            'label' => 'Verificar links quebrados',
            'none_found_title' => 'Nenhum link quebrado encontrado',
            'found_title' => 'Links quebrados encontrados',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Alternar descadastro',
        ],
    ],

];
