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
                  <a href="#">View Room</a>
                </td>
                <td>
                  <a href="#">Update</a>
                </td>
                <td>Delete</td>
              </tr>
          <?php } ?>
        <?php  } ?>
        <tr>
          <td></td>
          <td></td>
          <td>
            <a href="#">View Room</a>
          </td>
          <td>
            <a href="#">Update</a>
          </td>
          <td>Delete</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
