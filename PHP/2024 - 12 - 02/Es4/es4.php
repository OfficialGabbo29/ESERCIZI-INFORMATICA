<!DOCTYPE html>
<html lang="it">
    <body>
        <?php
            extract($_POST);
            define('username_reg', 'admin');
            define('password_reg', 'mypass');
            if (isset($inviato)) {
                if(username_reg === $username && password_reg === $password){
                    echo "ACCESSO ESEGUITO CON SUCCESSO. BENVENUTO ". $username ."!";
                }
                else{
                    echo "ACCESSO RIFIUTATO, PASSWORD SBAGLIATA O USERNAME INVALIDO";
                }
                echo "<BR>Uscirai in maniera automatica tra 10 secondi";
                echo "<meta http-equiv='refresh' content='10;url=" . $_SERVER['PHP_SELF'] . "'>";
            } 
            else{
                echo
                "<TABLE>
                <FORM action='" . $_SERVER['PHP_SELF'] . "' method='POST'>
                    <TR>
                        <TD><label for='username'> USERNAME: </label></TD>
                        <TD><input type='text' id='username' name='username'> </TD>
                        
                    </TR>
                    <TR>
                    <TD><label for='password'> PASSWORD: </label></TD>
                        <TD><input type='text' id='password' name='password'> </TD>
                    </TR>
                    <TR>
                        <TD><input type='submit' value='Submit' name='inviato'></TD>
                        <TD><input type='submit' value='Reset' name='reset1'></TD>
                    </TR>
                </FORM>
            </TABLE>";
            }
        ?>
    </body>
</html>