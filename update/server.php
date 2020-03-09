<?php
  include_once __DIR__ . '/../env.php';
  include_once __DIR__ . '/../database.php';

  // controllo per vedere se il GET id esiste
  if (!empty($_GET['id'])) {
    $roomId = $_GET['id'];
  }
  // Creo la query
  $sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";

  $result = $conn->query($sql);
  

  if ($result && $result->num_rows > 0) {
      $room = $result->fetch_assoc();
      // var_dump($rooms);
  } elseif ($result) {
    echo "0 results";
  } else {
    echo "query error";
  }
  $conn->close();
?>
