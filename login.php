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

if (isset($_POST["username"])) {
    $username = $_POST["username"];
} else {
    $username = "";
}
if (isset($_POST["password"])) {
    $password = $_POST["password"];
} else {
    $password = "";
}
function login($user, $chiave, $lista){
    for ($i=0; $i < count($lista) ; $i++) {
        if (($user == $lista[$i]["username"]) && ($chiave == $lista[$i]["password"])) {
            return "./index.php";
            break;
        }
    } 
    return "./login.php";
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
        <form action="<?php echo login($username,$password ,$utenti); ?>" method="post">
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
    </main>
</body>
</html>