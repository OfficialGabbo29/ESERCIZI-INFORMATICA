<!DOCTYPE html>
<html>
    <body>
        <?php
            extract($_POST);
            // Converti in numeri float
            $base1 = floatval($base);
            $altezza1 = floatval($altezza);

            // Verifica se i valori sono numerici
            if (is_numeric($base1) && is_numeric($altezza1)) {
                $area = $base1*$altezza1;
                echo "l'area del rettangolo è: $area";
                echo "<BR>";
                echo "Tra 20 secondi ritornerai alla pagina precedente";
                // Il reindirizzamento con il tag <meta>
                echo "<meta http-equiv='refresh' content='20;url=Area.html'>";

            } else {
                // Messaggio di errore
                echo "Ciò che hai inserito non è corretto perché devono essere numeri";
                echo "<br>";
                echo "tra 10 secondi ritornerai alla pagina precedente";
                echo "<meta http-equiv='refresh' content='10;url=Area.html'>";
            }
        ?>
    </body>
</html>