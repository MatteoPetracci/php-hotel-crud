<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';

  if(empty($_GET['id'])) {
    die('ID non esistente');
  }

  $roomId = $_GET['id'];
  $room = getId($conn,'stanze', $roomId)
  
?>
