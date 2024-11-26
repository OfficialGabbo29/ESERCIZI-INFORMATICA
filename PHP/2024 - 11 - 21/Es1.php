<!DOCTYPE html>
<html>
    <body>
        <?php
            $people = [["Name" => "Alice", "Age" => 25],["Name" => "Bob", "Age" => 30],["Name" => "Alice", "Age" => 35]];
            echo json_trasforma($people);

            function json_trasforma($people){
                $convert_json = json_encode($people);
                echo $convert_json;
                echo file_put_contents("Es1.json",$convert_json);
            }
        ?>
    </body>
</html>