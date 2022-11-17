<?php
$hostname = "localhost";
$username = "root";
$password = "1234";
$bd = "proiect_final";

$conexiune = new mysqli($hostname,$username,$password,$bd);
if ($conexiune->connect_error) {
  die("Connection failed: " . $conexiune->connect_error);
  exit();
}
?>