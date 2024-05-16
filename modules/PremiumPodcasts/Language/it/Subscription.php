<?php

declare(strict_types=1);

/**
 * @copyright  2022 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'podcast_subscriptions' => 'Abbonamenti al podcast',
    'add' => 'Nuovo abbonamento',
    'view' => 'Visualizza abbonamento',
    'edit' => 'Modifica abbonamento',
    'regenerate_token' => 'Rigenera token',
    'suspend' => 'Sospendi abbonamento',
    'resume' => 'Riprendi abbonamento',
    'delete' => 'Elimina abbonamento',
    'status' => [
        'active' => 'Attivo',
        'suspended' => 'Sospeso',
        'expired' => 'Scaduto',
    ],
    'list' => [
        'number' => 'Numero',
        'email' => 'Email',
        'expiration_date' => 'Data di scadenza',
        'unlimited' => 'Illimitato',
        'downloads' => 'Download',
        'status' => 'Stato',
    ],
    'form' => [
        'email' => 'Email',
        'expiration_date' => 'Data di scadenza',
        'expiration_date_hint' => 'La data e l\'ora in cui scade l\'abbonamento. Lascia vuoto per un abbonamento illimitato.',
        'submit_create' => 'Crea abbonamento',
        'submit_edit' => 'Modifica abbonamento',
    ],
    'form_link_add' => [
        'link' => 'Link alla pagina dell\'abbonamento',
        'link_hint' => 'Questo aggiungerà un invito nel sito web invitando gli ascoltatori a abbonarsi al podcast.',
        'submit' => 'Salva link',
    ],
    'suspend_form' => [
        'disclaimer' => 'Sospendere l\'abbonamento limiterà l\'accesso del sottoscrittore ai contenuti premium. Sarà comunque possibile rimuovere la sospensione in seguito.',
        'reason' => 'Motivo',
        'reason_placeholder' => 'Perché stai sospendendo l\'abbonamento?',
        "submit" => 'Sospendi abbonamento',
    ],
    'delete_form' => [
        'disclaimer' => 'L\'eliminazione dell\'abbonamento di {subscriber} rimuoverà tutti i dati analitici associati ad esso.',
        'understand' => 'Ho capito, rimuovi l\'abbonamento definitivamente',
        'submit' => 'Rimuovi abbonamento',
    ],
    'messages' => [
        'addSuccess' => 'Nuovo abbonamento aggiunto! È stata inviata una email di benvenuto a {subscriber}.',
        'addError' => 'Impossibile aggiungere l\'abbonamento.',
        'editSuccess' => 'La data di scadenza dell\'abbonamento è stata aggiornata! È stata inviata una email a {subscriber}.',
        'editError' => 'Impossibile modificare l\'abbonamento.',
        'regenerateTokenSuccess' => 'Token rigenerato! È stata inviata una email a {subscriber} con il nuovo token.',
        'regenerateTokenError' => 'Impossibile rigenerare il token.',
        'deleteSuccess' => 'L\'abbonamento è stato rimosso! È stata inviata una email a {subscriber}.',
        'deleteError' => 'Impossibile rimuovere l\'abbonamento.',
        'suspendSuccess' => 'L\'abbonamento è stato sospeso! È stata inviata una email a {subscriber}.',
        'suspendError' => 'Impossibile sospendere l\'abbonamento.',
        'resumeSuccess' => 'L\'abbonamento è stato ripreso! È stata inviata una email a {subscriber}.',
        'resumeError' => 'Impossibile riprendere l\'abbonamento.',
        'linkSaveSuccess' => 'Il link all\'abbonamento è stato salvato con successo! Apparirà nel sito web come una chiamata all\'azione!',
        'linkRemoveSuccess' => 'Il link all\'abbonamento è stato rimosso con successo!',
    ],
    'emails' => [
        'greeting' => 'Ciao,',
        'token' => 'Il tuo token: {0}',
        'unique_feed_link' => 'Il tuo link univoco al feed: {0}',
        'how_to_use' => 'Come usarlo?',
        'two_ways' => 'Hai due modi per sbloccare gli episodi premium:',
        'import_into_app' => 'Copia il tuo URL del feed univoco nella tua app per podcast preferita (importalo come feed privato per evitare di esporre le tue credenziali).',
        'go_to_website' => 'Vai al sito web di {podcastWebsite} e sblocca il podcast con il tuo token.',
        'welcome_subject' => 'Benvenuto in {podcastTitle}',
        'welcome' => 'Ti sei iscritto a {podcastTitle}, grazie e benvenuto a bordo!',
        'welcome_token_title' => 'Ecco le tue credenziali per sbloccare gli episodi premium del podcast:',
        'welcome_expires' => 'Il tuo abbonamento è stato impostato per scadere il {0}.',
        'welcome_never_expires' => 'Il tuo abbonamento è stato impostato per non scadere mai.',
        'reset_subject' => 'Il tuo token è stato resettato!',
        'reset_token' => 'Il tuo accesso a {podcastTitle} è stato resettato!',
        'reset_token_title' => 'Sono state generate nuove credenziali per te per sbloccare gli episodi premium del podcast:',
        'edited_subject' => 'Il tuo abbonamento è stato aggiornato!',
        'edited_expires' => 'Il tuo abbonamento per {podcastTitle} è stato impostato per scadere il {expiresAt}.',
        'edited_never_expires' => 'Il tuo abbonamento per {podcastTitle} è stato impostato per non scadere mai!',
        'suspended_subject' => 'Il tuo abbonamento è stato sospeso!',
        'suspended' => 'Il tuo abbonamento per {podcastTitle} è stato sospeso! Non puoi più accedere agli episodi premium del podcast.',
        'suspended_reason' => 'Questo è il motivo: {0}',
        'resumed_subject' => 'Il tuo abbonamento è stato ripreso!',
        'resumed' => 'Il tuo abbonamento per {podcastTitle} è stato ripreso! Puoi nuovamente accedere agli episodi premium del podcast.',
        'deleted_subject' => 'Il tuo abbonamento è stato rimosso!',
        'deleted' => 'Il tuo abbonamento per {podcastTitle} è stato rimosso! Non hai più accesso agli episodi premium del podcast.',
        'footer' => '{castopod} ospitato su {host}',
    ],
];
