<?php

include 'connect.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $country = $_POST['country'];
    $datum = $_POST['datum'];

    // Corrected SQL query
    $query = "INSERT INTO artist (name, country, datum) VALUES ('$name', '$country', '$datum')";

    try {
        // Use query() method instead of exec()
        $conn->query($query);

        // Redirect to index.php after successful insertion
        header("location: index.php");
        exit();
    } catch (PDOException $e) {
        // Handle any database errors here
        echo "Error: " . $e->getMessage();
    }
}

