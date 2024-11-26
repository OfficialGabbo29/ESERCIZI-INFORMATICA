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
                    return file_get_contents("employees.json");
                }

                function json_decodifica($file){
                    return json_decode($file, true);
                }

                $file = dowload_contenutoFile();
                $employees = json_decodifica($file);

                echo "<TR>
                <TH>NAME</TH>
                <TH>POSITION</TH>
                <TH>SALARY</TH>
                </TR>";

                foreach ($employees as $employee) {
                    echo "<TR>";
                    echo "<TD>". $employee['name']. "</TD>";
                    echo "<TD>". $employee['position']. "</TD>";
                    echo "<TD>$ ". $employee['salary']. "</TD>";
                    echo "</TR>";
                }
            ?>
        </table>
    </body>
</html>