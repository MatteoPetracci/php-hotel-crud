<!-- File per fare il delete -->
<?php
  include __DIR__ . '/../database.php';

  $roomId = $_POST['id'];

  if (empty($roomId)) {
    echo ('ID sbagliato');
  }

  $sql = "DELETE FROM `stanze` WHERE `id`='$roomId'";
  $result = $conn->query($sql);

  // var_dump($result);
  // echo 'cancellato'
  
  if ($result) {
    header("Location: $path?roomNumber=$roomId");
  } else {
    echo 'error';
  }
  $conn->close();
?>
