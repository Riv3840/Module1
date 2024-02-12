<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="trying.css"  type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ik heb geen idee</title>
<style>
* {
text-align:center;
}
</style>
</head>
<body>
hoeveel sterren? <form action="trying.php" method="GET">
  <input type="number"name="ster">
  <input type="submit">

</form>
 <?php
for ($i=0; $i <=$_GET["ster"]; $i++) { 
   for ($ii=0; $ii <$i*2-1; $ii++) { 
    echo "*";
   }
   echo "<br>";
}
for ($i=$_GET["ster"]; $i > 0; $i--) { 
  for ($ii=0; $ii +2 <$i * 2-1; $ii++) { 
    echo("*");
  }
  echo "<br>";
}
  


?> 
</body>
</html>