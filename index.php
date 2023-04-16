<?php
session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In & Sign Up</title>
</head>

<body>
    <h1> Home </h1>

    <?php if (isset($user)) : ?>
        <p> Hello <?= htmlspecialchars($user["name"]) ?> </p>
        <a href="logout.php">Log out</a>
    <?php else : ?>
        <a href="index.html">Back to signup or login</a>
    <?php endif; ?>
</body>

</html>