<!DOCTYPE html>
<html lang = "it">
    <body>
        <?php
            $studenti=array('gabriele' => 11, 'diego' => 4, 'rompidiego' => 10);
            echo rimuovistudente($studenti, "gabriele");
            
            function rimuovistudente($studenti, $name) {
                unset($studenti[$name]);
                print_r($studenti);
            }
        ?>
    </body>
</html>