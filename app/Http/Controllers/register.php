<?php
// Recupera i valori inviati dal modulo di registrazione
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$confermaPassword = $_POST["conferma_password"];
$nome_server = $_SERVER ['SERVER_NAME'];

// Effettua le operazioni di validazione dei dati
if (empty($email) || empty($username) || empty($password) || empty($confermaPassword)) {
    echo "Si prega di compilare tutti i campi.";
} elseif ($password !== $confermaPassword) {
    echo "Le password non corrispondono.";
} else {
  
    // Connessione al database 
    $servername = "nome_server";
    $username = "username";
    $password = "password";
    $dbname = "fakenews_db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepara la query di inserimento dei dati
        $query = "INSERT INTO utenti (email, username, password) VALUES (:email, :username, :password)";

        // Esegui la query di inserimento
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Registrazione completata con successo.";
    } catch(PDOException $e) {
        echo "Errore durante la registrazione: " . $e->getMessage();
    }

    // Chiudi la connessione al database
    $conn = null;
}
?>
