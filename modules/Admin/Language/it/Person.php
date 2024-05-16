<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'persons' => 'Persone',
    'all_persons' => 'Tutte le persone',
    'no_person' => 'Nessuno trovato!',
    'create' => 'Crea una persona',
    'view' => 'Visualizza persona',
    'edit' => 'Modifica persona',
    'delete' => 'Elimina persona',
    'messages' => [
        'createSuccess' => 'La persona è stata creata con successo!',
        'editSuccess' => 'La persona è stata aggiornata con successo!',
        'deleteSuccess' => 'La persona è stata rimossa!',
    ],
    'form' => [
        'avatar' => 'Avatar',
        'avatar_size_hint' =>
            'L\'avatar deve essere quadrato e largo e alto almeno 400px.',
        'full_name' => 'Nome completo',
        'full_name_hint' => 'Questo è il nome completo o l\'alias della persona.',
        'unique_name' => 'Nome unico',
        'unique_name_hint' => 'Usato per gli URL',
        'information_url' => 'URL delle informazioni',
        'information_url_hint' =>
            'URL di una risorsa di informazioni rilevanti sulla persona, come una homepage o una piattaforma di profilo di terze parti.',
        'submit_create' => 'Crea persona',
        'submit_edit' => 'Salva persona',
    ],
    'podcast_form' => [
        'title' => 'Gestisci persone',
        'add_section_title' => 'Aggiungi persone a questo podcast',
        'add_section_subtitle' => 'Puoi selezionare più persone e ruoli.',
        'persons' => 'Persone',
        'persons_hint' =>
            'Puoi selezionare una o più persone con gli stessi ruoli. È necessario creare prima le persone.',
        'roles' => 'Ruoli',
        'roles_hint' =>
            'Puoi selezionare nessuno, uno o più ruoli per una persona.',
        'submit_add' => 'Aggiungi persona/e',
        'remove' => 'Rimuovi',
    ],
    'episode_form' => [
        'title' => 'Gestisci persone',
        'add_section_title' => 'Aggiungi persone a questo episodio',
        'add_section_subtitle' => 'Puoi selezionare più persone e ruoli.',
        'persons' => 'Persone',
        'persons_hint' =>
            'Puoi selezionare una o più persone con gli stessi ruoli. È necessario creare prima le persone.',
        'roles' => 'Ruoli',
        'roles_hint' =>
            'Puoi selezionare nessuno, uno o più ruoli per una persona.',
        'submit_add' => 'Aggiungi persona/e',
        'remove' => 'Rimuovi',
    ],
    'credits' => 'Crediti',
];
