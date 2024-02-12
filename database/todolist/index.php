<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>To-do list met PHP, PDO en een MySQL database</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

    <form method="post" action="create.php">
        <input type="text" placeholder="Naam" name="naam"><br>
        <input type="text" placeholder="Taakomschrijving" name="taakomschrijving"><br>
        <input type="date" name="deadline"><br>
        <input type="submit" name="submit" value="Verzenden"><br>
    </form><br>

    <?php 
    include 'read.php';
     ?>
</body>
</html>