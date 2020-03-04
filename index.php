<?php
  include 'database.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>
    <div class="container">
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
                      <td>Delete</td>
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
