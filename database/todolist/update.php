<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$select = $conn->query("SELECT * FROM taak WHERE id=$id");
$row = $select->fetch();

if (isset($_POST['submit'])) {


    $naam = $_POST['naam'];
    $taakomschrijving = $_POST['taakomschrijving'];
    $deadline = $_POST['deadline'];

    $query = "UPDATE taak SET naam = '" . $naam . "',
                            taakomschrijving = '" . $taakomschrijving . "',
                            deadline = '" . $deadline . "'
                            WHERE id=$id";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    header("location: index.php");
}
?>

<form method="post">
    <input type="text" name="naam" value="<?php echo $row['naam']; ?>"><br>
    <input type="text" name="taakomschrijving" value="<?php echo $row['taakomschrijving']; ?>"><br>
    <input type="date" name="deadline" value="<?php echo $row['deadline']; ?>"><br>
    <input type="submit" name="submit" value="Updaten"><br>
</form>