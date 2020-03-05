<?php
  include __DIR__ . '/../database.php';
  $roomId = $_GET['id'];
  $sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";
  $result = $conn->query($sql);
  if(empty($_GET['id'])) {
    die('ID non esistente');
  }
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
