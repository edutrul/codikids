<?php
require_once 'login/dbconf.php';
// Create connection.
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
