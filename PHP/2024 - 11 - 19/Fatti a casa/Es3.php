<!DOCTYPE html>
<html lang = "it">
<body>
    <?php
        $numeri=array('banane' => 1, 'cipolle' => 2, 'carote' => 8);
        echo calcolospesa($numeri);
        $ris;
        function calcolospesa($numeri) {
            $ris=array_sum($numeri);
            echo $ris;

        }
    ?>
</body>
</html>