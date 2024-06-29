<?php session_start();
if (isset($_POST["username"])) {
    $_SESSION["username"] = $_POST["username"];
}

if (isset($_POST["password"])) {
    $_SESSION["password"] = $_POST["password"];
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <a href="./login.php">Login</a>
        <h1>Benvenuto: <?php echo $_SESSION["username"]?></h1>
        <a href="./logout.php">logout</a>
    </main>
</body>
</html>