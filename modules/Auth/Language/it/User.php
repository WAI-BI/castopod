<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'edit_role' => "Modifica ruolo di {username}",
    'ban' => 'Banna',
    'unban' => 'Revoca il ban',
    'delete' => 'Elimina',
    'create' => 'Nuovo utente',
    'view' => "Informazioni di {username}",
    'all_users' => 'Tutti gli utenti',
    'list' => [
        'user' => 'Utente',
        'role' => 'Ruolo',
        'banned' => 'Bannato?',
    ],
    'form' => [
        'email' => 'Email',
        'username' => 'Nome utente',
        'password' => 'Password',
        'new_password' => 'Nuova Password',
        'role' => 'Ruolo',
        'roles' => 'Ruoli',
        'permissions' => 'Permessi',
        'submit_create' => 'Crea utente',
        'submit_edit' => 'Salva',
        'submit_password_change' => 'Cambia!',
    ],
    'delete_form' => [
        'title' => 'Elimina {user}',
        'disclaimer' =>
            "Stai per eliminare {user} definitivamente. Non potrà più accedere all'area amministrativa.",
        'understand' => 'Ho capito, voglio eliminare {user} definitivamente',
        'submit' => 'Elimina',
    ],
    'messages' => [
        'createSuccess' =>
            'Utente creato con successo! {username} verrà richiesto di reimpostare la password al primo accesso.',
        'roleEditSuccess' =>
            "I ruoli di {username} sono stati aggiornati con successo.",
        'banSuccess' => '{username} è stato bannato.',
        'unbanSuccess' => '{username} è stato sbannato.',
        'editOwnerError' =>
            '{username} è il proprietario dell\'istanza, non è possibile modificare i suoi ruoli.',
        'banSuperAdminError' =>
            '{username} è un superadmin, non si può semplicemente bannare un superadmin…',
        'deleteOwnerError' =>
            '{username} è il proprietario dell\'istanza, non si può semplicemente eliminare il proprietario…',
        'deleteSuperAdminError' =>
            '{username} è un superadmin, non si può semplicemente eliminare un superadmin…',
        'deleteSuccess' => '{username} è stato eliminato.',
    ],
];
