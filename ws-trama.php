<?php
if (isset($_POST['data']) && isset($_POST['juego_id']) && isset($_POST['uid']) && isset($_POST['timer'])) {
  require_once 'connection.php';
  $data = $_POST['data'];
  $juego_id = $_POST['juego_id'];
  $uid = $_POST['uid'];
  $timer = $_POST['timer'];
  $sql = "INSERT INTO opcion (data, juego_id, uid, timer) "
      . "VALUES ('" . $data . "', " . $juego_id . ", '" . $uid . "', " . $timer . ")";
  if ($conn->query($sql) === TRUE) {
    print json_encode("New record created successfully");
    exit();
  } else {
    print json_encode("Error: " . $sql . $conn->error);
    exit();
  }
  $conn->close();
}

