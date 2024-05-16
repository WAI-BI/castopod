<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'title' => "Commento di {actorDisplayName} per {episodeTitle}",
    'back_to_comments' => 'Torna ai commenti',
    'form' => [
        'episode_message_placeholder' => 'Scrivi un commento…',
        'reply_to_placeholder' => 'Rispondi a @{actorUsername}',
        'submit' => 'Invia',
        'submit_reply' => 'Rispondi',
    ],
    'likes' => '{numberOfLikes, plural,
        one {# mi piace}
        other {# mi piace}
    }',
    'replies' => '{numberOfReplies, plural,
        one {# risposta}
        other {# risposte}
    }',
    'like' => 'Mi piace',
    'reply' => 'Rispondi',
    'view_replies' => 'Visualizza risposte ({numberOfReplies})',
    'block_actor' => 'Blocca utente @{actorUsername}',
    'block_domain' => 'Blocca dominio @{actorDomain}',
    'delete' => 'Elimina commento',
];
