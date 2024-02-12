<?php
// geef gevens voor database connectie op:
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "top2000";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// haal alle artiesten op
$sql = "SELECT id, name, country FROM artist";
$result = mysqli_query($conn, $sql);

// kijk of "name"via GET is doorgegeven
if (isset($_GET["name"]) && isset($_GET["country"])) {
  $name= $_GET ['name'];
  $country = $_GET ['country'];

  
  // ingevoerde name en countryin de tabel inserten
  $sql = "INSERT INTO artist (name, country) VALUES('".$name."', '".$country."')";

  $res = mysqli_query($conn, $sql);

}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .div_output {
      border:1px solid red;
      padding:5px;
      margin:10px;
    }
  </style>
</head>
<body>
  <div class="div_output">
    <form method="GET">
      name:<input type="text" name="name"><br>
      country: <input type="text" name="country"><br>
      <input type="submit" value="verstuur">
    </form>
  </div>

  <div class="div_output">
    <?php
      // zet alle artiesten in een textregel
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["country"]. "<br>";
        }
      } else {
        echo "0 results";
      }
    ?>
  </div>

</body>
</html>


