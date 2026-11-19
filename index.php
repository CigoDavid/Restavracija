
<?php
require_once "db.php";

$stmt = $pdo->query(
    "SELECT * FROM Gost ORDER BY GostID"
);

$Gost = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Database</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Restaurant Database</h1>

<a href="add.php" class="button">Add Person</a>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>

    <?php foreach ($Gost as $Gost): ?>
    <tr>
        <td><?= htmlspecialchars($Gost['GostID']) ?></td>
        <td><?= htmlspecialchars($Gost['Ime']) ?></td>
        <td><?= htmlspecialchars($Gost['Priimek']) ?></td>
        <td><?= htmlspecialchars($Gost['email'] ?? '') ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
