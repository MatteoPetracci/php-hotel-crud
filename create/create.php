<!-- Qui ho bisogno del form -->
<?php
  include __DIR__ . '/../partials/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <!-- Prende la query dal server.php -->
      <form action="server.php" method="get">
        <div class="form-group">
          <label for="room_number">Room number</label>
          <input class="form-control" type="text" name="room_number" value="">
        </div>
        <div class="form-group">
          <label for="beds">Beds</label>
          <input class="form-control" type="text" name="beds" value="">
        </div>
        <div class="form-group">
          <label for="floor">Floor</label>
          <input class="form-control" type="text" name="floor" value="">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success form-control" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  include __DIR__ . '/../partials/footer.php';
?>
