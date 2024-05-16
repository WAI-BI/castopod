<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'podcast_contributors' => 'Collaboratori del podcast',
    'view' => "Contributo di {username} a {podcastTitle}",
    'add' => 'Aggiungi collaboratore',
    'add_contributor' => 'Aggiungi un collaboratore per {0}',
    'edit_role' => 'Aggiorna ruolo per {0}',
    'edit' => 'Modifica',
    'remove' => 'Rimuovi',
    'list' => [
        'username' => 'Nome Utente',
        'role' => 'Ruolo',
    ],
    'form' => [
        'user' => 'Utente',
        'user_placeholder' => 'Seleziona un utente…',
        'role' => 'Ruolo',
        'role_placeholder' => 'Seleziona il suo ruolo…',
        'submit_add' => 'Aggiungi collaboratore',
        'submit_edit' => 'Aggiorna Ruolo',
    ],
    'delete_form' => [
        'title' => 'Rimuovi {contributor}',
        'disclaimer' =>
            'Stai per rimuovere {contributor} dai collaboratori. Non potrà più accedere a "{podcastTitle}".',
        'understand' => 'Capisco, voglio rimuovere {contributor} da "{podcastTitle}"',
        'submit' => 'Rimuovi',
    ],
    'messages' => [
        'editSuccess' => 'Ruolo modificato con successo!',
        'editOwnerError' => "Non puoi modificare il proprietario del podcast!",
        'removeOwnerError' => "Non puoi rimuovere il proprietario del podcast!",
        'removeSuccess' =>
            'Hai rimosso con successo {username} da {podcastTitle}',
        'alreadyAddedError' =>
            "Il collaboratore che stai cercando di aggiungere è già stato aggiunto!",
    ],
];
