<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';


  // controllo se ci sono i dati
  if (empty($_POST['beds'])) {
    die('No beds');
  }
  if (empty($_POST['floor'])) {
    die('No floor');
  }
  if (empty($_POST['room_number'])) {
    die('No room number');
  }

// Preparo la connessione al database con mssql_free_statement
$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNum = $_POST['room_number'];

$sql = "INSERT INTO `stanze` (`beds`,`floor`,`room_number`,`created_at`, `update_at`) VALUES(?,?,?, NOW(), NOW())";

$stmt = $conn->prepare($sql);

$stmt->bind_param("iii", $beds, $floor, $roomNum);

$stmt->execute();
// isset - Determina se una variabile è dichiarata ed è diversa daNULL
if (isset($stmt->insert_id)) {
  header("Location: $path/show/show.php?id=$stmt->insert_id");
} else {
  echo 'error';
}
