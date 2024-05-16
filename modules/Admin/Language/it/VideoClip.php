<?php

declare(strict_types=1);

/**
 * @copyright  2021 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'list' => [
        'title' => 'Video clip',
        'status' => [
            'label' => 'Stato',
            'queued' => 'in coda',
            'queued_hint' => 'Il clip è in attesa di essere elaborato.',
            'pending' => 'in sospeso',
            'pending_hint' => 'Il clip verrà generato a breve.',
            'running' => 'in esecuzione',
            'running_hint' => 'Il clip è in fase di generazione.',
            'failed' => 'fallito',
            'failed_hint' => 'Il clip non è stato generato: errore dello script.',
            'passed' => 'completato',
            'passed_hint' => 'Il clip è stato generato con successo!',
        ],
        'clip' => 'Clip',
        'duration' => 'Durata del lavoro',
    ],
    'title' => 'Clip video: {videoClipLabel}',
    'download_clip' => 'Scarica clip',
    'create' => 'Nuovo clip video',
    'go_to_page' => 'Vai alla pagina del clip',
    'retry' => 'Riprova la generazione del clip',
    'delete' => 'Elimina clip',
    'logs' => 'Log del lavoro',
    'messages' => [
        'alreadyExistingError' => 'Il clip video che stai cercando di creare esiste già!',
        'addToQueueSuccess' => 'Il clip video è stato aggiunto alla coda, in attesa di essere creato!',
        'deleteSuccess' => 'Il clip video è stato rimosso con successo!',
    ],
    'format' => [
        'landscape' => 'Orizzontale',
        'portrait' => 'Verticale',
        'squared' => 'Quadrato',
    ],
    'form' => [
        'title' => 'Nuovo clip video',
        'params_section_title' => 'Parametri del clip video',
        'clip_title' => 'Titolo del clip',
        'format' => [
            'label' => 'Scegli un formato',
            'landscape_hint' => 'Con un rapporto di 16:9, i video orizzontali sono ottimi per PeerTube, Youtube e Vimeo.',
            'portrait_hint' => 'Con un rapporto di 9:16, i video verticali sono ottimi per TikTok, Youtube shorts e Instagram stories.',
            'squared_hint' => 'Con un rapporto di 1:1, i video quadrati sono ottimi per Mastodon, Facebook, Twitter e LinkedIn.',
        ],
        'theme' => 'Seleziona un tema',
        'start_time' => 'Inizia alle',
        'duration' => 'Durata',
        'trim_start' => 'Taglia dall\'inizio',
        'trim_end' => 'Taglia dalla fine',
        'submit' => 'Crea clip video',
    ],
    'requirements' => [
        'title' => 'Requisiti mancanti',
        'missing' => 'Hai requisiti mancanti. Assicurati di aggiungere tutti gli elementi richiesti per consentire la creazione di un video per questo episodio!',
        'ffmpeg' => 'FFmpeg',
        'gd' => 'Graphics Draw (GD)',
        'freetype' => 'Libreria Freetype per GD',
        'transcript' => 'File di trascrizione (.srt)',
    ],
];
