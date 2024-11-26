<!DOCTYPE html>
<html>
    <body>
        <?php
            function dowload_contenutoFile(){
                return file_get_contents("Es2.json");
            }

            function upload_contenutoFile($json){
                file_put_contents("Es3.json", $json);
            }
            function json_decodifica($file){
                return json_decode($file, true);
            }

            function jeson_codifica($magazzino){
                return json_encode($magazzino);
            }


            
            $file= dowload_contenutoFile();
            $magazzino= json_decodifica($file);
            $name = "Hat";
            $prezzo= 20.0;
            $quantita=7;
            $prodotto=["Name" => $name, "Price" => $prezzo, "Quantita" => $quantita];
            $magazzino[count($magazzino)]=$prodotto;
            foreach ($magazzino as $prodotto){
                echo "Name: ". $prodotto["Name"];
                echo " ";
                echo "Prezzo: ". $prodotto["Price"];
                echo " ";
                echo "Quantita: ". $prodotto["Quantita"];
                echo "<BR>";
            }
            $magazzino=jeson_codifica($magazzino);
            echo upload_contenutoFile($magazzino);
        ?>
    </body>
</html>