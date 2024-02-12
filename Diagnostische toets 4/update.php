<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$select = $conn->query("SELECT * FROM artist WHERE id=$id");
$row = $select->fetch_assoc();

if (isset($_POST['submit'])) {

    $naam = mysqli_real_escape_string($conn, $_POST['name']);
    $taakomschrijving = mysqli_real_escape_string($conn, $_POST['country']);
    $datum = $_POST['datum'];

    if (empty($taakomschrijving) || strlen($taakomschrijving) > 100) {
        echo "De taakomschrijving moet worden ingevuld en mag niet langer zijn dan 100 tekens.";
    } else {
        $query = "UPDATE artist SET name = ?, country = ?, datum = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        
        // Bind parameters
        $stmt->bind_param("sssi", $naam, $taakomschrijving, $datum, $id);

        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Artiestgegevens bijgewerkt!";
        } else {
            echo "Er is een fout opgetreden bij het bijwerken van de artiestgegevens.";
        }
    }
}
?>

<form method="post" onsubmit="return validateForm()">
    <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
    <input type="text" name="country" value="<?php echo $row['country']; ?>"><br>
    <input type="date" name="datum" value="<?php echo $row['datum']; ?>"><br>
    <input type="submit" name="submit" value="Updaten"><br>
</form>

<script>
  function validateForm() {
    var name = document.getElementById("name").value;
    var country = document.getElementById("country").value;
    var datum = document.getElementById("datum").value;
    var nameInput = document.getElementById("name");
    var countryInput = document.getElementById("country");

    if (name.length < 3 || name.length > 50 || country.length === 0 || country.length > 100) {
        alert("Validatie mislukt! Controleer de invoervelden.");
        return false;
    }
    return true;
}