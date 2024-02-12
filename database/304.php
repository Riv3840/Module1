<?php
$mysqli = new mysqli("localhost","root","","users");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT achternaam, naam FROM users ORDER BY achternaam";
$result = $mysqli -> query($sql);

// Associative array
$row = $result -> fetch_assoc();
printf ("%s (%s)\n", $row["naam"], $row["achternaam"]);

// Free result set
$result -> free_result();

$mysqli -> close();
?>