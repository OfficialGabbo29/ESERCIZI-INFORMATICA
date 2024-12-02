<!DOCTYPE html>
<html lang="it">
    <body>
        <?php
            extract($_GET);
            if(isset($inviato)){
                $numero1 = (int)($numero1);
                $numero2 =(int)($numero2);
                $somma = $numero1 + $numero2;
                echo "La somma dei due numeri è " . $somma . "";
                echo "<meta http-equiv='refresh' content='5;url=" . $_SERVER['PHP_SELF'] . "'>";
            }
            else{
                echo 
                "<table>
                    <form action='" . $_SERVER['PHP_SELF'] ."'method='GET'>
                        <tr>
                            <td><label for='numero1'> Aggiungi un Numero: </label></td>
                            <td><input type='number' id='numero1' name='numero1'> </td>
                        </tr>
                        <tr>
                            <td><label for='numero2'> Altro Numero: </label></td>
                            <td><input type='number' id='numero2' name='numero2'> </td>
                        </tr>
                        <tr>
                            <td><input type='submit' value='Submit' name='inviato'></td>
                            <td><input type='reset' value='Reset'></td>
                        </tr>
                    </form>
                </table>";
            }
        ?>
    </body>
</html>