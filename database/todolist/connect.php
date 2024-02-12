<?php
// Variabelen met gegevens voor database
$servername = "localhost";
$dbname = "todo-list";
$username = "root";
$password = "";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
