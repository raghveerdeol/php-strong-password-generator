<?php 
// Consegna

// La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
// alla pagina principale della nostra applicazione (index.php)
// Bonus 1:
// Impedire la visualizzazione dei contenuti di index.php (anche semplici di prova) fino a quanto l'utente non sia loggato.
// Bonus 2:
// Prevedere l'uso di qualsiasi controllo attraverso una funzione inserita in un file separato in 'src/functions.php/') (modificato)
session_start(); 
require_once __DIR__ . "/listautenti.php";
if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    Header('Location: ./index.php');
}
$tentaoAccesso = false;
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    foreach ($utenti as $utente) {
        if ($utente["username"] === $username) {
            if ($utente["password"] === $password) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['logged'] = true;
                Header('Location: ./index.php');
                break;
            }
        }
    }
    if (!isset($_SESSION["logged"])) {
        $tentaoAccesso = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="./login.php" method="post">
            <div>
                <label for="username">Inserire username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                    <label for="password">Inserire password:</label>
                    <input type="text" name="password" id="password">
            </div>
            <input type="submit" value="submit">
        </form>
        <div>
            <?php if ($tentaoAccesso) { ?>
                <pre><?php echo 'Errore: i dati inseriti non sono validi'; ?></pre>
            <?php } ?>
        </div>
    </main>
</body>
</html>