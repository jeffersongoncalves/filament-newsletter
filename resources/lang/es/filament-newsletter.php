<?php

return [
    'navigation' => [
        'newsletters' => 'Boletines',
        'email_groups' => 'Grupos de correo',
    ],
    'fields' => [
        'subject' => 'Asunto',
        'sender_name' => 'Nombre del remitente',
        'sender_email' => 'Correo del remitente',
        'content_type' => 'Tipo de contenido',
        'content' => 'Contenido',
        'route' => 'Ruta',
        'published' => 'Publicado',
        'send_unsubscribe_link' => 'Enviar enlace de baja',
        'send_webview_link' => 'Enviar enlace de vista web',
        'scheduled_at' => 'Programado para',
        'sent_at' => 'Enviado el',
        'utm_campaign' => 'Campaña UTM',
        'email_groups' => 'Grupos de correo',
        'attachments' => 'Adjuntos',
        'status' => 'Estado',
        'total_recipients' => 'Destinatarios',
        'total_views' => 'Vistas',
        'title' => 'Título',
        'subscribers_count' => 'Suscriptores',
        'email' => 'Correo electrónico',
        'confirmed_at' => 'Confirmado el',
        'unsubscribed' => 'Dado de baja',
    ],
    'content_types' => [
        'rich_text' => 'Texto enriquecido',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Borrador',
        'scheduled' => 'Programado',
        'sending' => 'Enviando',
        'sent' => 'Enviado',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Enviar prueba',
            'modal_heading' => 'Enviar un boletín de prueba',
            'email' => 'Correo del destinatario',
            'sent_notification' => 'Correo de prueba enviado a :email',
        ],
        'send_now' => [
            'label' => 'Enviar ahora',
            'modal_heading' => '¿Enviar este boletín ahora?',
            'modal_description' => 'El boletín se pondrá en cola para enviarse a todos los suscriptores de los grupos de correo seleccionados. Esta acción no se puede deshacer.',
            'sent_notification' => 'Boletín en cola para su envío',
        ],
        'schedule' => [
            'label' => 'Programar',
            'modal_heading' => 'Programar este boletín',
            'scheduled_at' => 'Enviar el',
            'scheduled_notification' => 'Boletín programado',
        ],
        'sending_status' => [
            'label' => 'Estado del envío',
            'modal_heading' => 'Estado del envío',
            'sent' => 'Enviados',
            'failed' => 'Fallidos',
            'no_data' => 'Este boletín aún no se ha enviado.',
        ],
        'check_broken_links' => [
            'label' => 'Comprobar enlaces rotos',
            'none_found_title' => 'No se encontraron enlaces rotos',
            'found_title' => 'Se encontraron enlaces rotos',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Alternar baja',
        ],
    ],
];
