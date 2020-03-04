<?php
  include 'database.php';
  include 'partials/header.php';
?>
  <body>
    <header>
      <h1>ALL ROOMS</h1>
    </header>
    <div class="container my-sm-4 ">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>FLOOR</th>
                <th>NUMBER ROOM</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                if (!empty($rooms)) {
                  foreach ($rooms as $room ) { ?>
                    <tr>
                      <td><?php echo $room['id']; ?></td>
                      <td><?php echo $room['floor']; ?></td>
                      <td><?php echo $room['room_number']; ?></td>
                      <td>
                        <!-- Con href creo un link per andare su show.php dove popolo ogni volta l'id -->
                        <a href="show/show.php?id=<?php echo $room['id']; ?>">View Room</a>
                      </td>
                      <td>
                        <a href="#">Update</a>
                      </td>
                      <td class="btn-danger">Delete</td>
                    </tr>
                <?php } ?>
              <?php  } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
