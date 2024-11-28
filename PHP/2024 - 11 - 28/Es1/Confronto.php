<!DOCTYPE html>
<html>
    <body>
        <?php
            // Ottieni i valori dal form
            $n1 = $_POST["primoNumero"];
            $n2 = $_POST["secondoNumero"];

            // Converti in numeri float
            $n1 = floatval($n1);
            $n2 = floatval($n2);

            // Verifica se i valori sono numerici
            if (is_numeric($n1) && is_numeric($n2)) {
                // Confronta i numeri
                if ($n1 > $n2) {
                    echo "Il numero $n1 è maggiore di $n2";
                } else if ($n1 < $n2) {
                    echo "Il numero $n2 è maggiore di $n1";
                } else {
                    echo "Il numero $n2 è uguale al numero $n1";
                }
                echo "<br>";

                // Il reindirizzamento con il tag <meta>
                echo "<meta http-equiv='refresh' content='20;url=Confronto.html'>";

            } else {
                // Messaggio di errore
                echo "Ciò che hai inserito non è corretto perché devono essere numeri";
                echo "<br>";
                echo "Clicca <a href='Confronto.html'>qua</a> per ritornare indietro";
            }
        ?>
    </body>
</html>

