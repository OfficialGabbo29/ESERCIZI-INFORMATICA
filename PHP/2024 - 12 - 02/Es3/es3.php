<!DOCTYPE html>
<html lang="it">
    <body>
        <?php
            extract($_POST);
            echo 
            "<TABLE>
                <FORM action='" . $_SERVER['PHP_SELF'] . "' method='POST'>
                    <TR>
                        <TD><label for='numero1'> Inserisci il primo numero: </label></TD>
                        <TD><input type='number' id='numero1' name='numero1'> </TD>
                        <TD>
                            <SELECT name='op'>
                                <OPTION> + </OPTION>
                                <OPTION> - </OPTION>
                                <OPTION> * </OPTION>
                                <OPTION> / </OPTION>
                            </SELECT>
                        </TD>
                        <TD><label for='numero2'> Inserisci il secondo numero: </label></TD>
                        <TD><input type='number' id='numero2' name='numero2'> </TD>
                    </TR>
                    <TR>
                        <TD><input type='submit' value='Submit' name='inviato'></TD>
                        <TD><input type='submit' value='Reset' name='reset1'></TD>
                    </TR>
                </FORM>
            </TABLE>";

            if (isset($inviato)) {
                if($op == "+"){
                    echo $numero1 + $numero2;
                }
                else if($op == "*"){
                    echo $numero1 * $numero2;
                }
                else if($op == "/"){
                    echo $numero1 / $numero2;
                }
                else if($op == "-"){
                    echo $numero1 - $numero2;
                }
                else{
                    echo "Errore";
                }
            } 
        ?>
    </body>
</html>