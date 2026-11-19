
<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql = "INSERT INTO persons
            (first_name, last_name, email, city)
            VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['city']
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Person</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Add New Person</h1>

<form method="POST">

    <label>First Name</label>
    <input type="text" name="first_name" required>

    <label>Last Name</label>
    <input type="text" name="last_name" required>

    <label>Email</label>
    <input type="email" name="email">

    <label>City</label>
    <input type="text" name="city">

    <button type="submit">Save Person</button>

</form>

<a href="index.php">Back to persons</a>

</body>
</html>
