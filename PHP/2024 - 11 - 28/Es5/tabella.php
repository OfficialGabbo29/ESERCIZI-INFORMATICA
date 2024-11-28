<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Numeri</title>
    <style>
        table { 
            width: 50%; 
            border-collapse: collapse; 
            margin: 20px auto; 
        }
        th, td { 
            padding: 8px 12px; 
            text-align: center; 
            border: 1px solid #ddd; 
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
   <h1 style="text-align: center;">Tabella dei Numeri</h1>
   
   <table>
		<tr>
			<th>  Numeri </th>
		</tr>
		<?php
			include "dati.php";
			
			foreach($numeri as $num){
				echo "<tr><td>  $num </td></tr>"; //echo "<tr><td>".  $num . "</td></tr>";
			}
		?>
   </table>
   
	<h2 style="text-align: center;">Somma Totale: <?php echo $somma; ?></h2 >	

	<form action="tabella.php" method="POST">
		<label for="numero"> Aggiungi un Numero: </label>
		<input type="number" id="numero" name="numero">
		<input type="submit" value="Aggiungi"> 
	</form>


</body>
</html>