<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            if(isset($_POST['LOGIN'])){
                echo
                "<FORM action='" . $_SERVER['PHP_SELF'] . "' method='POST'>
                    <TABLE>
                        <TR>
                            <TD><LABEL for='username'> Username: </LABEL></TD>
                            <TD><INPUT type='text' name='USERNAME' value='inserisci qui il tuo username' ></TD>
                        </TR>
                        <TR>
                            <TD><LABEL for='password'> Password: </LABEL></TD>
                            <TD><INPUT type='text' name='PASSWORD' value='inserisci qui la tua password' ></TD>
                        </TR>
                        <TR>
                            <TD><INPUT  type='submit' name='tasto_LOGIN' value='PREMI PER EFFETTUARE IL LOGIN'></TD>
                            <TD><INPUT  type='submit' name='tasto_RESET' value='PREMI PER EFFETTUARE IL RESET'></TD>
                            <TD><INPUT  type='submit' name='tasto_EXIT' value='PREMI PER USCIRE'></TD>
                        </TR>
                    </TABLE>
                </FORM>";
            }
            else if(isset($_POST['REGISTRAZIONE'])){
                echo
                "<FORM action='" . $_SERVER['PHP_SELF'] . "' method='POST'>
                    <TABLE>
                        <TR>
                            <TD><LABEL for='username'> Username: </LABEL></TD>
                            <TD><INPUT type='text' name='USERNAME' value='inserisci qui il tuo username' ></TD>
                        </TR>
                        <TR>
                            <TD><LABEL for='password'> Password: </LABEL></TD>
                            <TD><INPUT type='text' name='PASSWORD' value='inserisci qui la tua password' ></TD>
                        </TR>
                        <TR>
                            <TD><INPUT  type='submit' name='tasto_REGISTRAZIONE' value='PREMI PER EFFETTUARE LA REGISTRAZIONE'></TD>
                            <TD><INPUT  type='submit' name='tasto_RESET' value='PREMI PER EFFETTUARE IL RESET'></TD>
                            <TD><INPUT  type='submit' name='tasto_EXIT' value='PREMI PER USCIRE'></TD>
                        </TR>
                    </TABLE>
                </FORM>";
            }
            else{
                echo 
                "<TABLE>
                    <FORM action='" . $_SERVER['PHP_SELF'] . "' method='POST'>
                        <TR>
                            
                            <TD><INPUT  type='submit' name='REGISTRAZIONE' value='REGISTRAZIONE'></TD>
                            <TD><INPUT  type='submit' name='LOGIN' value='LOGIN'></TD>
                        </TR> 
                </TABLE>
                ";
            }
        ?>
    </body>
    
</html>