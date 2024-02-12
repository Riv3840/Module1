<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<form action="ikhaatdit.php" method="POST" autocomplete="on">
  usdername:<input type="text" name="username"><br>
  wachtwoord: <input type="wachtwoord" name="wachtwoord"><br>
  <input type="submit">
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database-inlog";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['wachtwoord'];

  $mysql = "SELECT username,wachtwoord FROM users='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      if (password_verify($password, $row['wachtwoord'])) {
          echo "Inloggen gelukt!";
      } else {
          echo "Fout wachtwoord!";
      }
  } else {
      echo "Gebruiker niet gevonden!";
  }
}

$conn->close();
?>


</body>
</html>