<!DOCTYPE html>
<html>
    <body>
        <?php
            function aggiungiSuffisso(&$stringa, $suffisso = " - Modificato"){
                $stringa= $stringa . $suffisso;
            }

            $valore="Ciao";
            echo "Stringa iniziale: $valore ";
            aggiungiSuffisso($valore);
            echo "<BR>";
            echo " Stringa finale: $valore";
        ?>
    </body>
</html>