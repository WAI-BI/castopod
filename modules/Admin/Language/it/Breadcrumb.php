<?php

declare(strict_types=1);

use Modules\Admin\Config\Admin;

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'label' => 'breadcrumb',
    config('Admin')
        ->gateway => 'Home',
    'podcasts' => 'podcast',
    'episodes' => 'episodi',
    'subscriptions' => 'iscrizioni',
    'contributors' => 'contributori',
    'pages' => 'pagine',
    'settings' => 'impostazioni',
    'theme' => 'tema',
    'about' => 'informazioni',
    'add' => 'aggiungi',
    'new' => 'nuovo',
    'edit' => 'modifica',
    'persons' => 'persone',
    'publish' => 'pubblica',
    'publish-edit' => 'modifica pubblicazione',
    'publish-date-edit' => 'modifica data di pubblicazione',
    'unpublish' => 'non pubblicato',
    'delete' => 'elimina',
    'remove' => 'rimuovi',
    'fediverse' => 'fediverse',
    'blocked-actors' => 'attori bloccati',
    'blocked-domains' => 'domini bloccati',
    'users' => 'utenti',
    'my-account' => 'il mio account',
    'change-password' => 'modifica password',
    'imports' => 'importazioni',
    'sync-feeds' => 'sincronizza feed',
    'platforms' => 'piattaforme',
    'social' => 'social network',
    'funding' => 'finanziamenti',
    'monetization-other' => 'altro monetizzazione',
    'analytics' => 'analisi',
    'locations' => 'posizioni',
    'webpages' => 'pagine web',
    'unique-listeners' => 'ascoltatori unici',
    'players' => 'lettori',
    'listening-time' => 'tempo di ascolto',
    'time-periods' => 'periodi di tempo',
    'soundbites' => 'frammenti audio',
    'video-clips' => 'video clip',
    'embed' => 'lettore incorporabile',
    'notifications' => 'notifiche',
    'suspend' => 'sospendi',
];
