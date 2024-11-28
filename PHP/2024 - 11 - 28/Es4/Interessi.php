<!DOCTYPE html>
<html>
    <body>
        <?php
        extract($_POST); // Estrae le variabili dall'array $_POST
        echo "Ti chiami: $name";
        echo "<BR>";
        echo "Ti interessano i seguenti sport: "; // Aggiunto punto e virgola
        if (isset($bici)) { // Controlla se la variabile $bici è stata definita
            echo " bici "; // Aggiunto punto e virgola
        }
        if (isset($pallavolo)) { // Controlla se la variabile $pallavolo è stata definita
            echo " pallavolo "; // Aggiunto punto e virgola
        }
        ?>
    </body>
</html>
