<?php
session_start(); // Avvia la sessione
if(isset($_SESSION['username'])){
?>
<!DOCTYPE = html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <table>
            <tr> <th> Nome </th> <th> Cognome </th> <th> Reparto </th> </tr>
            <tr> <td> Mario </td> <td> Rossi </td> <td> Oncologia </td> </tr>
            <tr> <td> Picciotto </td> <td> Cucuzzo </td> <td> Cementificazione </td> </tr>
        </table>
    </body>
</html>
<?php } ?>