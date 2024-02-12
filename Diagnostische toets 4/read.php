<?php

$query = $conn->query("SELECT * FROM artist");
?>
  <?php
 $query = $conn->prepare("SELECT id, name,country,datum FROM artist");
$query->execute();

// Resultaat ophalen in een associatieve array
$result = $query->get_result();
?>

<table>
    <tr>
        <th>Naam</th>
        <th>country</th>
        <th>datum</th>
        <th>Update</th>
        <th>Verwijderen</th>
    </tr>
  
    <?php while ($row = $result->fetch_assoc()) { ?>

    <tr>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['country']); ?></td>
        <td><?php echo htmlspecialchars($row['datum']); ?> </td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Verwijderen</a></td>
    </tr>
    <?php } ?>
</table>
