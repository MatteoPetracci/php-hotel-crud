<?php
  include 'env.php';
  // Connessione al mio database
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Controllo della connessione
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error; die();
  }

  $sql = "SELECT * FROM `stanze`";
  $result = $conn->query($sql);

  // var_dump($result);

  // Controllo che result sia true e che results abbia num_rows e deve essere maggiore di zero
  if ($result && $result->num_rows > 0) {
    // Creo un array vuoto dove a ogni giro vado a pushare una Stanza
    $rooms = [];
    // Con fetch_assoc() vedo cosa contiene results e lo salvo nella variabile $row
    while($row = $result->fetch_assoc()) {
      // stampo tutti dati che vengono resituiti come array
      // var_dump($row);
      $rooms[] = $row;
      // var_dump($rooms);
      echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
    }
  } elseif ($result) {
    echo "0 results";
  } else {
    echo "query error";
  }
  $conn->close();
 ?>
