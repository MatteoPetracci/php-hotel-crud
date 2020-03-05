<?php
  include __DIR__ . '/../database.php';

  // Salvo in una variabile il GET
  $roomId = $_GET['id'];
  // Seleziono da stanze dove l'id è uguale a quello salvato nella variabile
  $sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $rooms = [];
    while($row = $result->fetch_assoc()) {
      $rooms[] = $row;
      // var_dump($rooms);

    }
  } elseif ($result) {
    echo "0 results";
  } else {
    echo "query error";
  }
  $conn->close();
?>
