<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
</body>
</html>
<?php
   //echo "de inlognaam is:" . $_POST["inloggevens"]. '<br>';
   //echo "de inlognaam is:" . $_POST["ww"]. '<br>';
   //echo "de buttonis:" . $_POST['verstuur'].  '<br>';

   if ($_POST['inloggegevens']=='manon' && $_POST['ww'] =='wachtwoord') {
    echo "je bent ingelogd";
   }
    else{
    echo"combinatie wachtwoord en gebruikersnaam is fout.";
   }

?>
