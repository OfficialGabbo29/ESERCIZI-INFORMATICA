<?php
session_start(); // Avvia la sessione

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Otteniamo i dati inviati dal modulo
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Leggi il file JSON con i dati di login
    $datidelJson = file_get_contents('amministrazione.json');
    // Decodifica il JSON in un array PHP
    $dati = json_decode($datidelJson, true);
    $boolean = false;

    // Verifica se le credenziali corrispondono
    foreach ($dati['login'] as $login) {
        if ($login['username'] === $username && $login['password'] === $password) {
            // Imposta la variabile di sessione per l'utente
            $_SESSION['username'] = $username;
            $_SESSION['accountType'] = $login['tipo'];
            $_SESSION['dati'] = $dati;
            $boolean = true;
            break;
        }
    }

    // Se le credenziali sono corrette, redirigi in base al tipo di account
    if ($boolean) {
        if ($_SESSION['accountType'] == 'Amministratore') {
            header('Location: generator_password.php');
        } elseif ($_SESSION['accountType'] == 'Medico') {
            header('Location: tabella.php');
        } else {
            echo "Tipo di account non valido!";
        }
        exit(); // Termina lo script dopo il reindirizzamento
    } else {
        echo "Credenziali errate!";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head> 
    <link rel="stylesheet" href="login.css">
    <style>
        table {
            margin: auto;
            border-collapse: collapse;
        }
        td {
            text-align: center;
            padding: 10px;
        }
        select {
            display: block;
            margin: auto;
        }
        button {
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <form method="POST" action="login.php">
        <table>
            <tr>
                <td colspan="2"><h1>Login</h1></td>
            </tr>
            <tr>
                <td><h2>Nome</h2></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><h2>Pass</h2></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Invia</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>



