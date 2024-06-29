<?php 
// Consegna
// Dato un array di utenti, ovvero array associativi con username e password in chiaro
// Creiamo una sicurissima e semplicissima pagina di login in cui l'utente puo' autenticarsi via form con:
// - un username
// - una password
// La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
// alla pagina principale della nostra applicazione (index.php), in cui visualizziamo via sessione il nome dell'utente loggato.
// Creiamo poi una pagina di logout (logout.php) che rimuova le informazioni della sessione dalla sessione attuale e redirezioni
// all pagina di login (login.php).
// Bonus 1:
// Impedire la visualizzazione dei contenuti di index.php (anche semplici di prova) fino a quanto l'utente non sia loggato.
// Bonus 2:
// Prevedere l'uso di qualsiasi controllo attraverso una funzione inserita in un file separato in 'src/functions.php/') (modificato)
session_start(); 
require_once __DIR__ . "/listautenti.php";
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
        <form action="./index.php" method="post">
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