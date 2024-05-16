<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'title' => 'Impostazioni generali',
    'instance' => [
        'title' => 'Istanza',
        'site_icon' => 'Icona del sito',
        'site_icon_delete' => 'Elimina icona del sito',
        'site_icon_hint' => 'Le icone del sito sono ciò che vedi sulle schede del browser, sulla barra dei segnalibri e quando aggiungi un sito web come collegamento rapido sui dispositivi mobili.',
        'site_icon_helper' => 'L\'icona deve essere quadrata e larga e alta almeno 512px.',
        'site_name' => 'Nome del sito',
        'site_description' => 'Descrizione del sito',
        'submit' => 'Salva',
        'editSuccess' => 'L\'istanza è stata aggiornata con successo!',
        'deleteIconSuccess' => 'L\'icona del sito è stata rimossa con successo!',
    ],
    'images' => [
        'title' => 'Immagini',
        'subtitle' => 'Qui puoi rigenerare tutte le immagini basate sugli originali che sono state caricate. Da utilizzare se noti che alcune immagini mancano. Questo processo potrebbe richiedere del tempo.',
        'regenerate' => 'Rigenera immagini',
        'regenerationSuccess' => 'Tutte le immagini sono state rigenerate con successo!',
    ],
    'housekeeping' => [
        'title' => 'Manutenzione',
        'subtitle' => 'Esegue varie operazioni di manutenzione. Utilizza questa funzione se incontri problemi con i file multimediali o l\'integrità dei dati. Queste operazioni potrebbero richiedere del tempo.',
        'reset_counts' => 'Reimposta contatori',
        'reset_counts_helper' => 'Questa opzione ricalcolerà e reimposterà tutti i conteggi dei dati (numero di follower, post, commenti, ...).',
        'rewrite_media' => 'Riscrivi metadati multimediali',
        'rewrite_media_helper' => 'Questa opzione eliminerà tutti i file multimediali superflui e li ricreerà (immagini, file audio, trascrizioni, capitoli, ...)',
        'rename_episodes_files' => 'Rinomina file audio degli episodi',
        'rename_episodes_files_hint' => 'Questa opzione rinominerà tutti i file audio degli episodi con una stringa casuale di caratteri. Usa questa opzione se uno dei link degli episodi privati è stato diffuso in modo improprio, poiché ciò lo nasconderà efficacemente.',
        'clear_cache' => 'Cancella tutta la cache',
        'clear_cache_helper' => 'Questa opzione eliminerà la cache di redis o i file di cache scrivibili.',
        'run' => 'Esegui manutenzione',
        'runSuccess' => 'La manutenzione è stata eseguita con successo!',
    ],
    'theme' => [
        'title' => 'Tema',
        'accent_section_title' => 'Colore di accento',
        'accent_section_subtitle' => 'Scegli il colore per determinare l\'aspetto e la sensazione di tutte le pagine pubbliche.',
        'pine' => 'Pino',
        'crimson' => 'Cremisi',
        'amber' => 'Ambra',
        'lake' => 'Lago',
        'jacaranda' => 'Jacaranda',
        'onyx' => 'Onice',
        'submit' => 'Salva',
        'setInstanceThemeSuccess' => 'Il tema è stato aggiornato con successo!',
    ],
];
