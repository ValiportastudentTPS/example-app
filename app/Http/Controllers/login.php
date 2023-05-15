<?php
// Recupera i valori di username e password inviati dal modulo HTML
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Effettua la verifica dell'username e della password (esempio di verifica hardcoded)
    if ($username === '' && $password === '') {
        // L'accesso è avvenuto con successo
        echo "Accesso riuscito. Benvenuto, $username!";
        // Puoi eseguire qui le azioni desiderate dopo il login
    } else {
        // L'username o la password sono incorretti
        echo "Credenziali di accesso non valide.";
        // Puoi reindirizzare l'utente a una pagina di errore o mostrare un messaggio appropriato
    }
}
?>