<?php
  include_once __DIR__ . '/../env.php';
  include_once __DIR__ . '/../database.php';

  if (empty($_POST['id'])) {
  die('Id non inserito');
}
  if (empty($_POST['beds'])) {
    die('Non hai inserito il numero di letti');
  }
  if (empty($_POST['floor'])) {
    die('Non hai inserito il piano');
  }
  if (empty($_POST['room_number'])) {
    die('Non hai inserito il numero di stanza');
  }

  $roomId = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $roomNum = $_POST['room_number'];
   // var_dump($roomId); die();
  // // Creo la query
  $sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";

  $result = $conn->query($sql);
  // var_dump($result); die();
  // // //
  if ($result && $result->num_rows > 0) {
      $room = $result->fetch_assoc();
  } else {
    die("0 results");
  }

  $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `update_at` = NOW() WHERE `id` = ?";

  $stmt = $conn->prepare();
  $stmt->bind_param("iiii", $roomNumber, $beds, $floor, $roomId);
  $stmt->execute();
  //
  if ($stmt->affected_rows > 0) {
    header("Location: $path/show/show.php?id=$roomId");
  } else {
    echo 'error';
  }

  $conn->close();

?>
