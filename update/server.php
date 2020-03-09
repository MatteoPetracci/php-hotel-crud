<?php
  include_once __DIR__ . '/../env.php';
  include_once __DIR__ . '/../database.php';
  include_once __DIR__ . '/../functions.php';

  if (empty($_POST['id'])) {
  die('No id');
}
  if (empty($_POST['beds'])) {
    die('No beds');
  }
  if (empty($_POST['floor'])) {
    die('No floor');
  }
  if (empty($_POST['room_number'])) {
    die('No room number');
  }

  $roomId = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $roomNum = $_POST['room_number'];
   // var_dump($roomId); die();

  $result = getId($conn, 'stanze', $roomId);

  // var_dump($result); die();

    if (count($result) > 0) {
      $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW() WHERE id = ?";

      $stmt = $conn->prepare($sql);
      // var_dump($stmt); die();

      $stmt->bind_param("iiii", $roomNum, $beds, $floor, $roomId);
      $stmt->execute();
      //
      if ($stmt->affected_rows > 0) {
        header("Location: $path/show/show.php?id=$roomId");
      } else {
        echo 'error';
      }
    } else {
      die('error room');
    }

    $conn->close()

  // // Creo la query
  // $sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";
  //
  // $result = $conn->query($sql);
  // // var_dump($result); die();
  // // // //
  // if ($result && $result->num_rows > 0) {
  //     $room = $result->fetch_assoc();
  // } else {
  //   die("0 results");
  // }


?>
