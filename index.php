<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php if (isset($_SESSION['logged']) && $_SESSION['logged']) { ?>
            <h1>Benvenuto: <?php echo $_SESSION["username"]?></h1>
        <?php } else {?>
        <h1>Per accedere fare login</h1>
        <a href="./login.php">Login</a>
        <?php } ?>
        <a href="./logout.php">logout</a>
    </main>
</body>
</html>