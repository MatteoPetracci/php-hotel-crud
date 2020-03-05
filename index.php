<?php
  include 'server.php';
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
              <!-- Se stanza non è vuoto ad ogni giro stampo i dati necessari -->
              <?php
                if (!empty($rooms)) {
                  foreach ($rooms as $room ) { ?>
                    <tr>
                      <td class="btn-primary"><?php echo $room['id']; ?></td>
                      <td><?php echo $room['floor']; ?></td>
                      <td><?php echo $room['room_number']; ?></td>
                      <td>
                        <!-- Con href creo un link per andare su show.php dove popolo ogni volta l'id -->
                        <a href="show/show.php?id=<?php echo $room['id']; ?>">View Room</a>
                      </td>
                      <td>
                        <a href="#">Update</a>
                      </td>
                      <td>
                        <form action="delete/server.php" method="post">
                          <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                          <input class="btn btn-danger" type="submit"value="Delete">
                        </form>
                      </td>
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
