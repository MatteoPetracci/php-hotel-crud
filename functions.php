<?php
function getAll($conn, $nameTable) {
  $sql = "SELECT * FROM `$nameTable`";
  $result = $conn->query($sql);


  // Controllo che result sia true e che results abbia num_rows e deve essere maggiore di zero
  if ($result && $result->num_rows > 0) {
    // Creo un array vuoto dove a ogni giro vado a pushare una Stanza
    $results = [];
    // Con fetch_assoc() vedo cosa contiene results e lo salvo nella variabile $row
    while($row = $result->fetch_assoc()) {
      // stampo tutti dati che vengono resituiti come array
      // var_dump($row);
      $results[] = $row;
      // var_dump($rooms);
      // echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
    }
  } elseif ($result) {
    $results = [];
  } else {
    $results = false;
  }
  $conn->close();
  return $results;
}

function getId($conn, $nameTable, $id) {
$sql = "SELECT * FROM `$nameTable` WHERE `id` = '$id'";

  $resultId = $conn->query($sql);

  if ($resultId && $resultId->num_rows > 0) {
      $result = $resultId->fetch_assoc();
      // var_dump($rooms);
  } elseif ($resultId) {
    $result = [];
  } else {
    $result = false;
  }
  // $conn->close();
  return $result;
}


?>
