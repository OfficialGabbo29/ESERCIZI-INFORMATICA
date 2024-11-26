<!DOCTYPE html>
<html>
    <body>
        <?php
            function areaRettangolo ($h, $b=0){
                $r=0;
                if($h > $b){
                    $r=$h;
                }
                else{
                    $r=$b;
                }
                return $r;
            }

            echo areaRettangolo(5);
            echo " ";
            echo areaRettangolo(5, 2);
        ?>
    </body>
</html>