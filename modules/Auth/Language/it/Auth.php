<?php

declare(strict_types=1);

/**
 * @copyright  2022 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'instance_groups' => [
        'owner' => [
            'title' => 'Proprietario dell\'istanza',
            'description' => 'Il proprietario di Castopod.',
        ],
        'superadmin' => [
            'title' => 'Super amministratore',
            'description' => 'Ha il controllo completo su Castopod.',
        ],
        'manager' => [
            'title' => 'Manager',
            'description' => 'Gestisce i contenuti di Castopod.',
        ],
        'podcaster' => [
            'title' => 'Podcaster',
            'description' => 'Utenti generici di Castopod.',
        ],
    ],
    'instance_permissions' => [
        'admin.access' => 'Può accedere all\'area amministrativa di Castopod.',
        'admin.settings' => 'Può accedere alle impostazioni di Castopod.',
        'users.manage' => 'Può gestire gli utenti di Castopod.',
        'persons.manage' => 'Può gestire le persone.',
        'pages.manage' => 'Può gestire le pagine.',
        'podcasts.view' => 'Può visualizzare tutti i podcast.',
        'podcasts.create' => 'Può creare nuovi podcast.',
        'podcasts.import' => 'Può importare podcast.',
        'fediverse.manage-blocks' => 'Può bloccare attori/domini fediverse dall\'interagire con Castopod.',
    ],
    'podcast_groups' => [
        'owner' => [
            'title' => 'Proprietario del podcast',
            'description' => 'Il proprietario del podcast.',
        ],
        'admin' => [
            'title' => 'Amministratore',
            'description' => 'Ha il controllo completo del podcast #{id}.',
        ],
        'editor' => [
            'title' => 'Editor',
            'description' => 'Gestisce i contenuti e le pubblicazioni del podcast #{id}.',
        ],
        'author' => [
            'title' => 'Autore',
            'description' => 'Gestisce i contenuti del podcast #{id} ma non può pubblicarli.',
        ],
        'guest' => [
            'title' => 'Ospite',
            'description' => 'Contributore generico del podcast #{id}.',
        ],
    ],
    'podcast_permissions' => [
        'view' => 'Può visualizzare il cruscotto e le analisi del podcast #{id}.',
        'edit' => 'Può modificare il podcast #{id}.',
        'delete' => 'Può eliminare il podcast #{id}.',
        'manage-import' => 'Può sincronizzare il podcast importato #{id}.',
        'manage-persons' => 'Può gestire le sottoscrizioni del podcast #{id}.',
        'manage-subscriptions' => 'Può gestire le sottoscrizioni del podcast #{id}.',
        'manage-contributors' => 'Può gestire i contributori del podcast #{id}.',
        'manage-platforms' => 'Può impostare/rimuovere i collegamenti alla piattaforma del podcast #{id}.',
        'manage-publications' => 'Può pubblicare il podcast #{id}.',
        'manage-notifications' => 'Può visualizzare e contrassegnare come lette le notifiche del podcast #{id}.',
        'interact-as' => 'Può interagire come il podcast #{id} per preferire, condividere o rispondere ai post.',
        'episodes.view' => 'Può visualizzare cruscotti e analisi degli episodi del podcast #{id}.',
        'episodes.create' => 'Può creare episodi per il podcast #{id}.',
        'episodes.edit' => 'Può modificare gli episodi del podcast #{id}.',
        'episodes.delete' => 'Può eliminare gli episodi del podcast #{id}.',
        'episodes.manage-persons' => 'Può gestire le persone degli episodi del podcast #{id}.',
        'episodes.manage-clips' => 'Può gestire i clip video o gli spezzoni audio del podcast #{id}.',
        'episodes.manage-publications' => 'Può pubblicare/sospendere episodi e post del podcast #{id}.',
        'episodes.manage-comments' => 'Può creare/rimuovere commenti agli episodi del podcast #{id}.',
    ],

    // chiavi mancanti
    'code' => 'Il tuo codice a 6 cifre',

    'set_password' => 'Imposta la tua password',

    // Email di benvenuto
    'welcomeSubject' => 'Sei stato invitato a {siteName}',
    'emailWelcomeMailBody' => 'È stato creato un account per te su {domain}, clicca sul link di accesso qui sotto per impostare la tua password. Il link è valido per {numberOfHours} ore dopo l\'invio di questa email.',
];
