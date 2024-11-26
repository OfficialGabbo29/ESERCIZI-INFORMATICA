<!DOCTYPE html>
<html lang = "it">
    <body>
        <?php
        $numeri=array(6,5,10,2,8);
        echo arraynumeripari($numeri);        

        function arraynumeripari($numeri) {
            for ($i = 0; $i < count($numeri); $i++) {
                if($numeri[$i]%2==0){
                    $arrayNmPari[$i]=$numeri[$i];
                }
                else $arrayNmDispari[$i]=$numeri[$i];
            }
            print_r($arrayNmPari);
            print_r($arrayNmDispari);
        }
        ?>
    </body>

</html>