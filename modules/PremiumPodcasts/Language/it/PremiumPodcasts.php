<?php

declare(strict_types=1);

/**
 * @copyright  2022 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'podcast_is_premium' => 'Il podcast contiene episodi premium',
    'episode_is_premium' => 'L\'episodio è premium, disponibile solo per gli abbonati premium',
    'unlock_episode' => 'Questo episodio è disponibile solo per gli abbonati premium. Clicca per sbloccarlo!',
    'banner_unlock' => 'Questo podcast contiene episodi premium, disponibili solo per gli abbonati premium.',
    'banner_lock' => 'Il podcast è sbloccato, goditi gli episodi premium!',
    'subscribe' => 'Abbonati',
    'lock' => 'Blocca',
    'unlock' => 'Sblocca',
    'unlock_form' => [
        'title' => 'Contenuto premium',
        'subtitle' => 'Questo podcast contiene episodi premium bloccati! Hai la chiave per sbloccarli?',
        'token' => 'Inserisci la tua chiave',
        'token_hint' => 'Se sei abbonato a {podcastTitle}, puoi copiare la chiave che ti è stata inviata via email e incollarla qui.',
        'submit' => 'Sblocca tutti gli episodi!',
        'call_to_action' => 'Sblocca tutti gli episodi di {podcastTitle}:',
        'subscribe_cta' => 'Abbonati ora!',
    ],
    'messages' => [
        'unlockSuccess' => 'Il podcast è stato sbloccato con successo! Goditi gli episodi premium!',
        'unlockBadAttempt' => 'La tua chiave non sembra funzionare…',
        'lockSuccess' => 'Il podcast è stato bloccato con successo!',
    ],
];
