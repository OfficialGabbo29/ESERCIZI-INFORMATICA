<!DOCTYPE html>
<html lang="it">
    <body>
        <?php
            extract($_POST);
            echo 
            "<table>
                <form action='" . $_SERVER['PHP_SELF'] . "' method='POST'>
                    <tr>
                        <td><label for='name'> Inserisci un Nome: </label></td>
                        <td><input type='text' id='name' name='name'> </td>
                    </tr>
                    <tr>
                        <td><label for='voto'> Inserisci un voto: </label></td>
                        <td><input type='number' id='voto' name='voto'> </td>
                    </tr>
                    <tr>
                        <td><input type='submit' value='Submit' name='inviato'></td>
                        <td><input type='submit' value='Reset' name='reset1'></td>
                    </tr>
                </form>
            </table>";

            if (isset($inviato)) {
                if( $voto >= 6 && $voto <= 10){
                    echo "LO STUDENTE DI NOME " . $name . " E' STATO PROMOSSO! voto: " .$voto;               
                }
                else if($voto <= 5 && $voto >= 1){
                    echo "LO STUDENTE DI NOME " . $name . " E' STATO BOCCIATO! voto: " .$voto;
                }
                else{
                    echo "Numero inserito non valido!";
                }
            } 
        ?>
    </body>
</html>