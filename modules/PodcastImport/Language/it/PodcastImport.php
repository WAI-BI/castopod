<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'banner' => [
        'disclaimer' => 'Importazione',
        'text' => '{podcastTitle} è attualmente in fase di importazione.',
        'cta' => 'Visualizza stato importazione',
    ],
    'old_podcast_section_title' => 'Il podcast da importare',
    'old_podcast_legal_disclaimer_title' => 'Avvertenza legale',
    'old_podcast_legal_disclaimer' =>
        'Assicurati di possedere i diritti per questo podcast prima di importarlo. Copiare e trasmettere un podcast senza i diritti appropriati è pirateria ed è perseguibile per legge.',
    'imported_feed_url' => 'URL Feed Importato',
    'imported_feed_url_hint' => 'Il feed deve essere in formato xml o rss.',
    'new_podcast_section_title' => 'Il nuovo podcast',
    'lock_import' =>
        'Questo feed è protetto. Non puoi importarlo. Se sei il proprietario, sbloccalo sulla piattaforma di origine.',
    'submit' => 'Aggiungi importazione alla coda',
    'queue' => [
        'status' => [
            'label' => 'Stato',
            'queued' => 'in coda',
            'queued_hint' => 'L\'attività di importazione è in attesa di essere elaborata.',
            'canceled' => 'annullato',
            'canceled_hint' => 'L\'attività di importazione è stata annullata.',
            'running' => 'in esecuzione',
            'running_hint' => 'L\'attività di importazione è in corso.',
            'failed' => 'fallita',
            'failed_hint' => 'L\'attività di importazione non è riuscita a completarsi: errore di script.',
            'passed' => 'completata',
            'passed_hint' => 'L\'attività di importazione è stata completata con successo!',
        ],
        'feed' => 'Feed',
        'duration' => 'Durata Importazione',
        'imported_episodes' => 'Episodi Importati',
        'imported_episodes_hint' => '{newlyImportedCount} nuovi, {alreadyImportedCount} già importati.',
        'actions' => [
            'cancel' => 'Annulla',
            'retry' => 'Riprova',
            'delete' => 'Elimina',
        ],
    ],
    'syncForm' => [
        'title' => 'Sincronizza Feed',
        'feed_url' => 'URL Feed',
        'feed_url_hint' => 'L\'URL del feed che desideri sincronizzare con il podcast corrente.',
        'submit' => 'Aggiungi alla coda',
    ],
    'messages' => [
        'canceled' => 'L\'attività di importazione è stata annullata con successo!',
        'notRunning' => 'Impossibile annullare l\'attività di importazione poiché non è in esecuzione.',
        'alreadyRunning' => 'L\'attività di importazione è già in corso. Puoi annullarla prima di riprovare.',
        'retried' => 'L\'attività di importazione è stata messa in coda, verrà riprovata a breve!',
        'deleted' => 'L\'attività di importazione è stata eliminata con successo!',
        'importTaskQueued' => 'Una nuova attività è stata messa in coda, l\'importazione inizierà a breve!',
        'syncTaskQueued' => 'Una nuova attività di importazione è stata messa in coda, la sincronizzazione inizierà a breve!',
    ],
];
