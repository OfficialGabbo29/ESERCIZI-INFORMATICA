<?php
session_start(); // Avvia la sessione
if(isset($_SESSION['username'])){
    if(isset($_POST["bottoneGeneraPass"])){
        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $reparto=$_POST['reparto'];
        $password=$nome+$cognome+$reparto; 
        echo "
        <form action='".$_SERVER['PHP_SELF'] ."' method='POST'>
            <tr>
                <td colspan=" .'2'. "><h1> Registra Medico </h1></td> 
            </tr>
            <tr>
                <td><h2> Nome </h2></td>
                <td><input type='text' id='nome' name='nome'> </input> </td>
            </tr>
            <tr>
                <td><h2> Cognome </h2></td> 
                <td><input type='text' id='cognome' name='cognome'> </input> </td>
            </tr>
            <tr>
                <td><h2> Reparto </h2></td> 
                <td><input type='text' id='reparto' name='reparto'> </input> </td>
            </tr>
            <tr> 
                <td class=" . 'ciao' ." colspan=" .'2'.">
                <input type='submit' id='bottoneGeneraPass' name='bottoneGeneraPass' value='Genera password'></input></td> 
            </tr>
            <tr> 
                <td class=" . 'ciao' ." colspan=".'2' ."><label>" . $password . "</label> </td>
            </tr>
            <tr> 
                <td class=" . 'ciao' ." colspan=". '2' ."><button> Invia </button></td> 
            </tr>
        </form>
        ";


        $nuovoUtente["username"]=$nome+$cognome;
        $nuovoUtente["password"]=$password;
        $nuovoUtente["tipo"]="Medico";
        $_SESSION['dati']['login'][] = $nuovoUtente;
        $nuovoJson = json_encode($_SESSION['dati'], JSON_PRETTY_PRINT);
        file_put_contents('amministrazione.json', $nuovoJson);
    }
    else{
?>
<!DOCTYPE = html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <table>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method='POST'>
                <tr>
                    <td colspan="2"><h1> Registra Medico </h1></td> 
                </tr>
                <tr>
                    <td><h2> Nome </h2></td>
                    <td><input type='text' id='nome' name='nome'> </input> </td>
                </tr>
                <tr>
                    <td><h2> Cognome </h2></td> 
                    <td><input type='text' id='cognome' name='cognome'> </input> </td>
                </tr>
                <tr>
                    <td><h2> Reparto </h2></td> 
                    <td><input type='text' id='reparto' name='reparto'> </input> </td>
                </tr>
                <tr> 
                    <td class="ciao" colspan="2">
                    <input type="submit" id='bottoneGeneraPass' name='bottoneGeneraPass' value="Genera password"></input></td> 
                </tr>
                <tr> 
                    <td class="ciao" colspan="2"><label name=""></label> </td>
                </tr>
                <tr> 
                    <td class="ciao" id="" colspan="2"><input> Invia </input></td> 
                </tr>
            </form>
        </table>
    </body>
</html>
<?php 
    }
} 
?>