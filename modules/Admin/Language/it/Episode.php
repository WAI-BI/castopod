<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Stagione {seasonNumber}',
    'season_abbr' => 'Stag. {seasonNumber}',
    'number' => 'Episodio {episodeNumber}',
    'number_abbr' => 'Ep. {episodeNumber}',
    'season_episode' => 'Stagione {seasonNumber} episodio {episodeNumber}',
    'season_episode_abbr' => 'Stag. {seasonNumber} Ep. {episodeNumber}',
    'number_of_comments' => '{numberOfComments, plural,
        one {# commento}
        other {# commenti}
    }',
    'all_podcast_episodes' => 'Tutti gli episodi del podcast',
    'back_to_podcast' => 'Torna al podcast',
    'edit' => 'Modifica',
    'preview' => 'Anteprima',
    'publish' => 'Pubblica',
    'publish_edit' => 'Modifica pubblicazione',
    'publish_date_edit' => 'Modifica data di pubblicazione',
    'unpublish' => 'Non pubblicato',
    'publish_error' => 'L\'episodio è già stato pubblicato.',
    'publish_edit_error' => 'L\'episodio è già stato pubblicato.',
    'publish_cancel_error' => 'L\'episodio è già stato pubblicato.',
    'publish_date_edit_error' => 'L\'episodio non è ancora stato pubblicato, non puoi modificare la sua data di pubblicazione.',
    'publish_date_edit_future_error' => 'La data di pubblicazione dell\'episodio può essere impostata solo su una data passata! Se desideri riprogrammarlo, annulla prima la pubblicazione.',
    'publish_date_edit_success' => 'La data di pubblicazione dell\'episodio è stata aggiornata con successo!',
    'unpublish_error' => 'L\'episodio non è pubblicato.',
    'delete' => 'Elimina',
    'go_to_page' => 'Vai alla pagina',
    'create' => 'Aggiungi un episodio',
    'publication_status' => [
        'published' => 'Pubblicato',
        'with_podcast' => 'Pubblicato',
        'scheduled' => 'Pianificato',
        'not_published' => 'Non pubblicato',
    ],
    'with_podcast_hint' => 'Da pubblicare contemporaneamente al podcast',
    'list' => [
        'search' => [
            'placeholder' => 'Cerca un episodio',
            'clear' => 'Cancella ricerca',
            'submit' => 'Cerca',
        ],
        'number_of_episodes' => '{numberOfEpisodes, plural,
            one {# episodio}
            other {# episodi}
        }',
        'episode' => 'Episodio',
        'visibility' => 'Visibilità',
        'downloads' => 'Download',
        'comments' => 'Commenti',
        'actions' => 'Azioni',
    ],
    'messages' => [
        'createSuccess' => 'Episodio creato con successo!',
        'editSuccess' => 'Episodio aggiornato con successo!',
        'publishSuccess' => '{publication_status, select,
            published {Episodio pubblicato con successo!}
            scheduled {Pubblicazione dell\'episodio programmata con successo!}
            with_podcast {Questo episodio sarà pubblicato contemporaneamente al podcast.}
            other {Questo episodio non è pubblicato.}
        }',
        'publishCancelSuccess' => 'Pubblicazione dell\'episodio annullata con successo!',
        'unpublishBeforeDeleteTip' => 'Devi annullare la pubblicazione dell\'episodio prima di eliminarlo.',
        'scheduleDateError' => 'Devi impostare la data di programmazione!',
        'deletePublishedEpisodeError' => 'Annulla la pubblicazione dell\'episodio prima di eliminarlo.',
        'deleteSuccess' => 'Episodio eliminato con successo!',
        'deleteError' => 'Impossibile eliminare l\'episodio {type, select,
            transcript {della trascrizione}
            chapters {dei capitoli}
            image {della copertina}
            audio {dell\'audio}
            other {del media}
        }.',
        'deleteFileError' => 'Impossibile eliminare il file {type, select,
            transcript {della trascrizione}
            chapters {dei capitoli}
            image {della copertina}
            audio {dell\'audio}
            other {del media}
        } {file_key}. Puoi rimuoverlo manualmente dal tuo disco.',
        'sameSlugError' => 'Esiste già un episodio con lo slug scelto.',
    ],
    'form' => [
        'file_size_error' =>
            'Il tuo file è troppo grande! La dimensione massima è {0}. Aumenta i valori di `memory_limit`, `upload_max_filesize` e `post_max_size` nel tuo file di configurazione PHP e riavvia il tuo server web per caricare il file.',
        'audio_file' => 'File audio',
        'audio_file_hint' => 'Scegli un file audio .mp3 o .m4a.',
        'info_section_title' => 'Informazioni sull\'episodio',
        'cover' => 'Copertina dell\'episodio',
        'cover_hint' =>
            'Se non si imposta una copertina, verrà utilizzata quella del podcast al suo posto.',
        'cover_size_hint' => 'La copertina deve essere quadrata e larga almeno 1400px.',
        'title' => 'Titolo',
        'title_hint' =>
            'Dovrebbe contenere un nome di episodio chiaro e conciso. Non specificare qui il numero dell\'episodio o della stagione.',
        'permalink' => 'Permalink',
        'season_number' => 'Stagione',
        'episode_number' => 'Episodio',
        'type' => [
            'label' => 'Tipo',
            'full' => 'Completo',
            'full_hint' => 'Contenuto completo (l\'episodio)',
            'trailer' => 'Trailer',
            'trailer_hint' => 'Breve contenuto promozionale che rappresenta un anteprima dello spettacolo attuale',
            'bonus' => 'Bonus',
            'bonus_hint' => 'Contenuti extra per lo spettacolo (ad esempio, dietro le quinte o interviste al cast) o contenuti di cross-promozione per un altro spettacolo',
        ],
        'premium_title' => 'Premium',
        'premium' => 'L\'episodio deve essere accessibile solo agli abbonati premium',
        'parental_advisory' => [
            'label' => 'Avviso parentale',
            'hint' => 'L\'episodio contiene contenuti espliciti?',
            'undefined' => 'non definito',
            'clean' => 'Pulito',
            'explicit' => 'Esplicito',
        ],
        'show_notes_section_title' => 'Note dello spettacolo',
        'show_notes_section_subtitle' =>
            'Fino a 4000 caratteri, essere chiari e concisi. Le note dello spettacolo aiutano i potenziali ascoltatori a trovare l\'episodio.',
        'description' => 'Descrizione',
        'description_footer' => 'Piè di pagina della descrizione',
        'description_footer_hint' =>
            'Questo testo viene aggiunto alla fine di ogni descrizione dell\'episodio, è un buon posto per inserire i tuoi link sociali ad esempio.',
        'additional_files_section_title' => 'File aggiuntivi',
        'additional_files_section_subtitle' =>
            'Questi file possono essere utilizzati da altre piattaforme per offrire una migliore esperienza al tuo pubblico. Consulta il {podcastNamespaceLink} per ulteriori informazioni.',
        'location_section_title' => 'Posizione',
        'location_section_subtitle' => 'Di che posto si tratta in questo episodio?',
        'location_name' => 'Nome o indirizzo della posizione',
        'location_name_hint' => 'Può essere una posizione reale o fittizia',
        'transcript' => 'Trascrizione (sottotitoli / didascalie)',
        'transcript_hint' => 'Sono ammessi solo .srt o .vtt.',
        'transcript_download' => 'Scarica la trascrizione',
        'transcript_file' => 'File della trascrizione (.srt o .vtt)',
        'transcript_remote_url' => 'URL remoto per la trascrizione',
        'transcript_file_delete' => 'Elimina il file della trascrizione',
        'chapters' => 'Capitoli',
        'chapters_hint' => 'Il file deve essere in formato JSON Chapters.',
        'chapters_download' => 'Scarica i capitoli',
        'chapters_file' => 'File dei capitoli',
        'chapters_remote_url' => 'URL remoto per il file dei capitoli',
        'chapters_file_delete' => 'Elimina il file dei capitoli',
        'advanced_section_title' => 'Parametri avanzati',
        'advanced_section_subtitle' =>
            'Se hai bisogno di tag RSS che Castopod non gestisce, impostali qui.',
        'custom_rss' => 'Tag RSS personalizzati per l\'episodio',
        'custom_rss_hint' => 'Questo verrà iniettato all\'interno del tag ❬item❭.',
        'block' => 'L\'episodio dovrebbe essere nascosto dai cataloghi pubblici',
        'block_hint' =>
            'Lo stato di visualizzazione o nascondi dell\'episodio: attivando questo pulsante impedisce che l\'episodio appaia su Apple Podcasts, Google Podcasts e qualsiasi altra app di terze parti che estrae spettacoli da questi elenchi. (Non garantito)',
        'submit_create' => 'Crea episodio',
        'submit_edit' => 'Salva episodio',
    ],
    'publish_form' => [
        'back_to_episode_dashboard' => 'Torna alla bacheca degli episodi',
        'post' => 'Il tuo post di annuncio',
        'post_hint' =>
            "Scrivi un messaggio per annunciare la pubblicazione del tuo episodio. Il messaggio verrà trasmesso a tutti i tuoi follower nel fediverse e verrà presentato nella homepage del tuo podcast.",
        'message_placeholder' => 'Scrivi il tuo messaggio…',
        'publication_date' => 'Data di pubblicazione',
        'publication_method' => [
            'now' => 'Ora',
            'schedule' => 'Programma',
            'with_podcast' => 'Pubblica insieme al podcast',
        ],
        'scheduled_publication_date' => 'Data di pubblicazione programmata',
        'scheduled_publication_date_clear' => 'Cancella la data di pubblicazione',
        'scheduled_publication_date_hint' =>
            'È possibile pianificare il rilascio dell\'episodio impostando una data di pubblicazione futura. Questo campo deve essere formattato come AAAA-MM-GG HH:mm',
        'submit' => 'Pubblica',
        'submit_edit' => 'Modifica la pubblicazione',
        'cancel_publication' => 'Annulla la pubblicazione',
        'message_warning' => 'Non hai scritto un messaggio per il tuo post di annuncio!',
        'message_warning_hint' => 'Avere un messaggio aumenta l\'impegno sociale, garantendo una migliore visibilità per il tuo episodio.',
        'message_warning' => 'Hai scritto un messaggio…',
        'message_warning_submit' => 'Pubblica comunque',
    ],
    'publish_date_edit_form' => [
        'new_publication_date' => 'Nuova data di pubblicazione',
        'new_publication_date_hint' => 'Deve essere impostato su una data passata.',
        'submit' => 'Modifica la data di pubblicazione',
    ],
    'unpublish_form' => [
        'disclaimer' =>
            "La disattivazione dell'episodio cancellerà tutti i commenti e i post ad esso associati e lo rimuoverà dal feed RSS del podcast.",
        'understand' => 'Ho capito, voglio disattivare l\'episodio',
        'submit' => 'Disattiva',
    ],
    'delete_form' => [
        'disclaimer' =>
            "L'eliminazione dell'episodio cancellerà tutti i file multimediali, i commenti, i video e i frammenti audio ad esso associati.",
        'understand' => 'Ho capito, voglio eliminare l\'episodio',
        'submit' => 'Elimina',
    ],
    'embed' => [
        'title' => 'Player embeddabile',
        'label' =>
            'Scegli un colore del tema, copia il player embeddabile negli appunti, quindi incollalo sul tuo sito web.',
        'clipboard_iframe' => 'Copia il player embeddabile negli appunti',
        'clipboard_url' => 'Copia l\'indirizzo negli appunti',
        'dark' => 'Scuro',
        'dark-transparent' => 'Scuro trasparente',
        'light' => 'Chiaro',
        'light-transparent' => 'Chiaro trasparente',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'modalità bozza',
        'text' => '{publication_status, select,
                published {Questo episodio non è ancora stato pubblicato.}
                scheduled {Questo episodio è programmato per la pubblicazione il {publication_date}.}
                with_podcast {Questo episodio verrà pubblicato contemporaneamente al podcast.}
                other {Questo episodio non è ancora stato pubblicato.}
            }',
        'preview' => 'Anteprima',
    ],
];
