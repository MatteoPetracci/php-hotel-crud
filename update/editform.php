<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../partials/header.php';

  if (!empty($_GET['id'])) {
    $roomId = $_GET['id'];
  }
  // Creo la query
  $sql = "SELECT * FROM `stanze` WHERE `id`='$roomId'";

  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
  }
  else {
    die('error');
  }

?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <!-- Prende la query dal server.php -->
      <form class="server.php" method="post">
        <div class="form-group">
          <label for="room_number">Room number</label>
          <input class="form-control" type="text" name="room_number" value="<?php echo $room['room_number'];?>">
        </div>
        <div class="form-group">
          <label for="beds">Beds</label>
          <input class="form-control" type="text" name="beds" value="<?php echo $room['beds'];?>">
        </div>
        <div class="form-group">
          <label for="floor">Floor</label>
          <input class="form-control" type="text" name="floor" value="<?php echo $room['floor'];?>">
        </div>
        <!-- l'input nascosto conterrà l'id della stanza specifica -->
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $room['id'];?>">
          <input  type="submit" class="btn btn-success form-control" name="" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  include __DIR__ . '/../partials/footer.php';
?>
