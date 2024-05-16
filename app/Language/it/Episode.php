<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Stagione {seasonNumber}',
    'season_abbr' => 'S{seasonNumber}',
    'number' => 'Episodio {episodeNumber}',
    'number_abbr' => 'Ep. {episodeNumber}',
    'season_episode' => 'Stagione {seasonNumber} episodio {episodeNumber}',
    'season_episode_abbr' => 'S{seasonNumber}:E{episodeNumber}',
    'persons' => '{personsCount, plural,
        one {# persona}
        other {# persone}
    }',
    'persons_list' => 'Persone',
    'back_to_episodes' => 'Torna agli episodi di {podcast}',
    'comments' => 'Commenti',
    'activity' => 'Attività',
    'chapters' => 'Capitoli',
    'transcript' => 'Trascrizione',
    'description' => 'Descrizione episodio',
    'number_of_comments' => '{numberOfComments, plural,
        one {# commento}
        other {# commenti}
    }',
    'all_podcast_episodes' => 'Tutti gli episodi del podcast',
    'back_to_podcast' => 'Torna al podcast',
    'preview' => [
        'title' => 'Anteprima',
        'not_published' => 'Non pubblicato',
        'text' => '{publication_status, select,
            published {Questo episodio non è ancora stato pubblicato.}
            scheduled {Questo episodio è programmato per la pubblicazione il {publication_date}.}
            with_podcast {Questo episodio sarà pubblicato contemporaneamente al podcast.}
            other {Questo episodio non è ancora stato pubblicato.}
        }',
        'publish' => 'Pubblica',
        'publish_edit' => 'Modifica pubblicazione',
    ],
    'no_chapters' => 'Nessun capitolo disponibile per questo episodio.',
    'download_transcript' => 'Scarica trascrizione ({extension})',
    'no_transcript' => 'Nessuna trascrizione disponibile per questo episodio.',
];
