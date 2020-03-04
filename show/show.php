<?php
  include __DIR__ . '/../partials/header.php';
?>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card my-sm-4 ">
              <thead>
                <?php
                include 'server.php';
                // var_dump($room);
                ?>
                <table class="table">
                <tr>
                  <th>ID: </th>
                  <th>FLOOR: </th>
                  <th>NUMBER ROOM:</th>
                  <th>BEDS:</th>
                  <th>AGGIORNATO AL:</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if (!empty($rooms)) {
                    foreach ($rooms as $room ) { ?>
                      <tr>
                        <td class="btn-primary"><?php echo $room['id']; ?></td>
                        <td><?php echo $room['floor']; ?></td>
                        <td><?php echo $room['room_number']; ?></td>
                        <td><?php echo $room['beds']; ?></td>
                        <td><?php echo $room['updated_at']; ?></td>
                      </tr>
                  <?php } ?>
                <?php  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
