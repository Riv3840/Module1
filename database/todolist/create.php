<?php

include 'connect.php';

if (isset($_POST['submit'])) {

    $naam = $_POST['naam'];
    $taakomschrijving = $_POST['taakomschrijving'];
    $deadline = $_POST['deadline'];

    $query = "INSERT INTO taak (naam, taakomschrijving, deadline) VALUES ('$naam', '$taakomschrijving', '$deadline')";

    $conn->exec($query);

    header("location: index.php");
}

