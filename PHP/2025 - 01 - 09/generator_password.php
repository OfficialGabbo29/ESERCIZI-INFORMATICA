<!DOCTYPE = html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <table>
            <?php if(!isset($_POST["bottoneGeneraPass"])){ ?>
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
                        <td class="ciao" colspan="2"><button> Invia </button></td> 
                    </tr>
                </form>
            <?php }
            else{
                $password=$_POST["nome"] . $_POST["cognome"] . $_POST["reparto"]; 
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
            }
            ?>
        </table>
    </body>
</html>