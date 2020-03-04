<?php
// Utilizzo questo file solo per creare la connessione 
  include __DIR__ .'/../env.php';
  // Connessione al mio database
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Controllo della connessione
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error; die();
  }
