<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'title' => 'Εγκαταστάτης Castopod',
    'manual_config' => 'Χειροκίνητη ρύθμιση',
    'manual_config_subtitle' =>
        'Δημιουργήστε ένα αρχείο `.env` με τις ρυθμίσεις σας και ανανεώστε τη σελίδα για να συνεχίσετε την εγκατάσταση.',
    'form' => [
        'instance_config' => 'Ρύθμιση παραμέτρων εμφάνισης',
        'hostname' => 'Όνομα κεντρικού υπολογιστή',
        'media_base_url' => 'Διεύθυνση URL πολυμέσων',
        'media_base_url_hint' =>
            'Εάν χρησιμοποιείτε μια υπηρεσία CDN και/ ή μια εξωτερική υπηρεσία ανάλυσης, μπορείτε να την ρυθμίσετε εδώ.',
        'admin_gateway' => 'Πύλη διαχειριστή',
        'admin_gateway_hint' =>
            'Η διαδρομή πρόσβασης στην περιοχή διαχειριστή (π.χ. https://example.com/cp-admin). Έχει οριστεί από προεπιλογή ως cp-admin, σας συνιστούμε να την αλλάξετε για λόγους ασφαλείας.',
        'auth_gateway' => 'Πύλη ταυτοποίησης',
        'auth_gateway_hint' =>
            'Η διαδρομή πρόσβασης στην περιοχή διαχειριστή (π.χ. https://example.com/cp-auth). Έχει οριστεί από προεπιλογή ως cp-admin, σας συνιστούμε να την αλλάξετε για λόγους ασφαλείας.',
        'database_config' => 'Ρυθμίσεις βάσης δεδομένων',
        'database_config_hint' =>
            'Το Castopod πρέπει να συνδεθεί στη βάση δεδομένων MySQL (ή MariaDB). Αν δεν έχετε αυτές τις απαιτούμενες πληροφορίες, παρακαλούμε επικοινωνήστε με το διαχειριστή του διακομιστή σας.',
        'db_hostname' => 'Όνομα κεντρικού υπολογιστή βάσης δεδομένων',
        'db_name' => 'Όνομα βάσης δεδομένων',
        'db_username' => 'Όνομα Χρήστη Βάσης Δεδομένων',
        'db_password' => 'Κωδικός πρόσβασης βάσης δεδομένων',
        'db_prefix' => 'Πρόθεμα βάσης δεδομένων',
        'db_prefix_hint' =>
            "Το πρόθεμα των ονομασιών πινάκων Castopod αφήστε σαν να μην ξέρετε τι σημαίνει.",
        'cache_config' => 'Διαμόρφωση cache',
        'cache_config_hint' =>
            'Επιλέξτε τον προτιμώμενο χειριστή προσωρινής μνήμης. Αφήστε την προεπιλεγμένη τιμή αν δεν έχετε ιδέα τι σημαίνει.',
        'cache_handler' => 'Ρυθμιστής cache',
        'cacheHandlerOptions' => [
            'file' => 'Αρχείο',
            'redis' => 'Redis',
            'predis' => 'Predis',
        ],
        'next' => 'Επόμενο',
        'submit' => 'Ολοκλήρωση εγκατάστασης',
        'create_superadmin' => 'Δημιουργήστε το λογαριασμό υπερδιαχειριστή',
        'email' => 'Email',
        'username' => 'Όνομα Χρήστη',
        'password' => 'Κωδικόs πρόσβασης',
    ],
    'messages' => [
        'createSuperAdminSuccess' =>
            'Ο λογαριασμός υπερδιαχειριστή έχει δημιουργηθεί με επιτυχία. Συνδεθείτε για να ξεκινήσετε το podcasting!',
        'databaseConnectError' =>
            'Το Castopod δεν μπόρεσε να συνδεθεί στη βάση δεδομένων σας. Επεξεργαστείτε τη διαμόρφωση της βάσης δεδομένων σας και προσπαθήστε ξανά.',
        'writeError' =>
            "Δεν ήταν δυνατή η δημιουργία/εγγραφή του αρχείου `.env`. Πρέπει να το δημιουργήσετε χειροκίνητα ακολουθώντας το πρότυπο αρχείου `.env.example` που περιγράφεται στο Castopod.",
    ],
];
