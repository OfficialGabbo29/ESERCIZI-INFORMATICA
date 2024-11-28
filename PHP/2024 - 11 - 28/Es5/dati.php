<?php

if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
	$numeroDaAggiungere=$_POST['numero'];
	$dati = leggiNumeri();
	$numeri=$dati["numeri"];
	$numeri[]=(int)$numeroDaAggiungere;
	$dati["numeri"]=$numeri;
	scriviDati($dati);
}


$dati = leggiNumeri();
$numeri=$dati["numeri"]; //array ad indice numerico
$somma=array_sum($numeri);


function scriviDati($datiDaScrivere){
	$json = json_encode($datiDaScrivere);
	file_put_contents('numeri.json',$json);
}
function leggiNumeri() {
    $json = file_get_contents('numeri.json');
    return json_decode($json, true); // Decodifica il JSON in un array associativo
}

?>