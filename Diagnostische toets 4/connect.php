<?php
// Databasegegevens
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "top2000";

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

// SQL-query om gegevens op te halen (vervang 'jouw_tabel' door de daadwerkelijke tabelnaam)
$sql = "SELECT * FROM artist";
$result = $conn->query($sql);



