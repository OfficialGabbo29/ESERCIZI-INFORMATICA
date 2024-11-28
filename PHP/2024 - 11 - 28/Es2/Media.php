<!DOCTYPE html>
<html>
    <body>
        <?php
            extract($_POST);
            $numeri = explode(',', $elenco);

            $somma=0;
            $count=0;
            foreach ($numeri as $numero){
                $somma+=$numero;
                $count++;
            }

            $media = $somma/$count;
            echo "la media dei voti è: $media";

            // Il reindirizzamento con il tag <meta>
            echo "<meta http-equiv='refresh' content='20;url=Media.html'>";
        ?>
    </body>
</html>