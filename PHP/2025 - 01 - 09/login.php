<?php
// Controlliamo se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Otteniamo i dati inviati dal modulo
    $username = $_POST['username'];
    $password = $_POST['password'];
    $accountType = $_POST['accountType'];

    // Aggiungi una logica per verificare il login (es. controllo con il database)

    // Reindirizzamento in base al tipo di account selezionato
    if ($accountType == 'Amministratore') {
        header('Location: generator_password.php');
    } elseif ($accountType == 'Medico') {
        header('Location: tabella.html');
    } else {
        echo "Tipo di account non valido!";
    }
    exit();
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
                        <select name="accountType" id="Accounts">
                            <option value="Amministratore">Amministratore</option>
                            <option value="Medico">Medico</option>
                        </select>
                    </td>
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


