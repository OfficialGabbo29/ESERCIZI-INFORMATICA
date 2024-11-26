<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                border: 3px solid black; /* Imposta il bordo della tabella */
            }
            td {
                width: 20px;
                height: 30px;
                border: 1px solid black; /* Imposta il bordo per ogni cella */
                background-color: green;
                font-weight: bold;
                color: white;
            }
            TH {
                width: 20px;
                height: 30px;
                border: 1px solid black; /* Imposta il bordo per ogni cella */
                background-color: darkgray;
            }
            tr {
                color: black; /* righe di una tabella */
            } 
        </style>
    </head>
    <body>
        <table>
            <?php
                function dowload_contenutoFile(){
                    return file_get_contents("students.json");
                }

                function json_decodifica($file){
                    return json_decode($file, true);
                }

                function media_voti($voti){
                    $somma=0;
                    $count=0;
                    foreach ($voti as $voto){
                        $somma+=$voto;
                        $count++;
                    }
                    return $somma/$count;
                }

                $file = dowload_contenutoFile();
                $students = json_decodifica($file);

                echo "<TR>
                <TH>NAME</TH>
                <TH>AGE</TH>
                <TH>AVERAGE</TH>
                <TH>STATUS</TH>
                </TR>";

                foreach ($students as $studente) {
                    $media = media_voti($studente["grades"]);
                    if($media<6){
                        echo "<TR style='background-color: red'>";
                        echo "<TD style='background-color: red'>". $studente['name']. "</TD>";
                        echo "<TD style='background-color: red'>". $studente['age']. "</TD>";
                        echo "<TD style='background-color: red'>". $media. "</TD>";
                        echo "<TD style='background-color: red'>". $studente['status']. "</TD>";
                        echo "</TR>";
                    }
                    else{
                        echo "<TR>";
                        echo "<TD>". $studente['name']. "</TD>";
                        echo "<TD>". $studente['age']. "</TD>";
                        echo "<TD>". $media. "</TD>";
                        echo "<TD>". $studente['status']. "</TD>";
                        echo "</TR>";
                    }
                }
            ?>
        </table>
    </body>
</html>