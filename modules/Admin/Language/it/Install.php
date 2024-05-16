<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'manual_config' => 'Configurazione manuale',
    'manual_config_subtitle' =>
        'Crea un file `.env` con le tue impostazioni e aggiorna la pagina per continuare l\'installazione.',
    'form' => [
        'instance_config' => 'Configurazione dell\'istanza',
        'hostname' => 'Nome host',
        'media_base_url' => 'URL base dei media',
        'media_base_url_hint' =>
            'Se utilizzi un CDN e/o un servizio di analisi esterno, puoi impostarli qui.',
        'admin_gateway' => 'Portale di amministrazione',
        'admin_gateway_hint' =>
            'Il percorso per accedere all\'area di amministrazione (ad esempio https://example.com/cp-admin). È impostato per impostazione predefinita come cp-admin, ti consigliamo di cambiarlo per motivi di sicurezza.',
        'auth_gateway' => 'Portale di autenticazione',
        'auth_gateway_hint' =>
            'Il percorso per accedere alle pagine di autenticazione (ad esempio https://example.com/cp-auth). È impostato per impostazione predefinita come cp-auth, ti consigliamo di cambiarlo per motivi di sicurezza.',
        'database_config' => 'Configurazione del database',
        'database_config_hint' =>
            'Castopod deve connettersi al tuo database MySQL (o MariaDB). Se non hai queste informazioni richieste, contatta l\'amministratore del server.',
        'db_hostname' => 'Nome host del database',
        'db_name' => 'Nome del database',
        'db_username' => 'Nome utente del database',
        'db_password' => 'Password del database',
        'db_prefix' => 'Prefisso del database',
        'db_prefix_hint' =>
            "Il prefisso dei nomi delle tabelle di Castopod, lascialo com'è se non sai cosa significa.",
        'cache_config' => 'Configurazione della cache',
        'cache_config_hint' =>
            'Scegli il tuo gestore di cache preferito. Lascialo come valore predefinito se non hai idea di cosa significhi.',
        'cache_handler' => 'Gestore della cache',
        'cacheHandlerOptions' => [
            'file' => 'File',
            'redis' => 'Redis',
            'predis' => 'Predis',
        ],
        'next' => 'Avanti',
        'submit' => 'Completare l\'installazione',
        'create_superadmin' => 'Crea il tuo account di superamministratore',
        'email' => 'Email',
        'username' => 'Nome utente',
        'password' => 'Password',
    ],
    'messages' => [
        'createSuperAdminSuccess' =>
            'Il tuo account di superamministratore è stato creato con successo. Accedi per iniziare a fare podcasting!',
        'databaseConnectError' =>
            'Castopod non è riuscito a connettersi al tuo database. Modifica la configurazione del database e riprova.',
        'writeError' =>
            "Impossibile creare/scrivere il file `.env`. Devi crearlo manualmente seguendo il modello del file `.env.example` nel pacchetto Castopod.",
    ],
];
