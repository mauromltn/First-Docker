<?php
// Credenziali per la connessione al database
$servername = "mysql"; // Nome del servizio definito nel file docker-compose.yml
$username = "my_user"; // Utente specificato nel docker-compose.yml
$password = "my_password"; // Password specificata nel docker-compose.yml
$database = "my_db"; // Nome del database specificato nel docker-compose.yml

try {
    // Creazione di una nuova connessione PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    // Configurazione dell'attributo per la gestione degli errori
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Messaggio di successo
    echo "Connessione al database riuscita!";
} catch (PDOException $e) {
    // Gestione degli errori di connessione
    echo "Errore di connessione: " . $e->getMessage();
}
?>