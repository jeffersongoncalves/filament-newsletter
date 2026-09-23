<?php

return [
    'navigation' => [
        'newsletters' => 'Newsletters',
        'email_groups' => 'Groupes d\'e-mails',
    ],
    'fields' => [
        'subject' => 'Objet',
        'sender_name' => 'Nom de l\'expéditeur',
        'sender_email' => 'E-mail de l\'expéditeur',
        'content_type' => 'Type de contenu',
        'content' => 'Contenu',
        'route' => 'Route',
        'published' => 'Publiée',
        'send_unsubscribe_link' => 'Envoyer le lien de désinscription',
        'send_webview_link' => 'Envoyer le lien de version web',
        'scheduled_at' => 'Planifiée le',
        'sent_at' => 'Envoyée le',
        'utm_campaign' => 'Campagne UTM',
        'email_groups' => 'Groupes d\'e-mails',
        'attachments' => 'Pièces jointes',
        'status' => 'Statut',
        'total_recipients' => 'Destinataires',
        'total_views' => 'Vues',
        'title' => 'Titre',
        'subscribers_count' => 'Abonnés',
        'email' => 'E-mail',
        'confirmed_at' => 'Confirmé le',
        'unsubscribed' => 'Désinscrit',
    ],
    'content_types' => [
        'rich_text' => 'Texte enrichi',
        'markdown' => 'Markdown',
        'html' => 'HTML',
    ],
    'statuses' => [
        'draft' => 'Brouillon',
        'scheduled' => 'Planifiée',
        'sending' => 'Envoi en cours',
        'sent' => 'Envoyée',
    ],
    'actions' => [
        'send_test' => [
            'label' => 'Envoyer un test',
            'modal_heading' => 'Envoyer une newsletter de test',
            'email' => 'E-mail du destinataire',
            'sent_notification' => 'E-mail de test envoyé à :email',
        ],
        'send_now' => [
            'label' => 'Envoyer maintenant',
            'modal_heading' => 'Envoyer cette newsletter maintenant ?',
            'modal_description' => 'La newsletter sera mise en file d\'attente pour être envoyée à chaque abonné des groupes d\'e-mails sélectionnés. Cette action est irréversible.',
            'sent_notification' => 'Newsletter mise en file d\'attente pour l\'envoi',
        ],
        'schedule' => [
            'label' => 'Planifier',
            'modal_heading' => 'Planifier cette newsletter',
            'scheduled_at' => 'Envoyer le',
            'scheduled_notification' => 'Newsletter planifiée',
        ],
        'sending_status' => [
            'label' => 'Statut d\'envoi',
            'modal_heading' => 'Statut d\'envoi',
            'sent' => 'Envoyés',
            'failed' => 'Échoués',
            'no_data' => 'Cette newsletter n\'a pas encore été envoyée.',
        ],
        'check_broken_links' => [
            'label' => 'Vérifier les liens cassés',
            'none_found_title' => 'Aucun lien cassé trouvé',
            'found_title' => 'Liens cassés trouvés',
        ],
        'toggle_unsubscribed' => [
            'label' => 'Basculer la désinscription',
        ],
    ],
];
