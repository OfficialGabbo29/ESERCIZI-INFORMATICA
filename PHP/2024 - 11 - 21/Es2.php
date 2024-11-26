<!DOCTYPE html>
<html>
    <body>
        <?php
            function contenutoFile(){
                return file_get_contents("Es2.json");
            }
            function json_decodifica($file){
                return json_decode($file, true);
            }


            
            $file= contenutoFile();
            $magazzino= json_decodifica($file);
            foreach ($magazzino as $prodotto){
                echo "Name: ". $prodotto["Name"];
                echo " ";
                echo "Prezzo: ". $prodotto["Price"];
                echo " ";
                echo "Quantita: ". $prodotto["Quantita"];
                echo "<BR>";
            }
        ?>
    </body>
</html>