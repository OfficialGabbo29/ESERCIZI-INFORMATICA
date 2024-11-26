<!DOCTYPE html>
<html>
    <body>
        <?php
            function invertiStringa ($stringa="ciao"){
                return strrev($stringa);
            }

            echo invertiStringa();
            echo " ";
            echo invertiStringa("Diego imbruttito");
        ?>
    </body>
</html>