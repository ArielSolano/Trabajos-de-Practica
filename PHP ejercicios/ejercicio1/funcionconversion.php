<?php
$cant= $_POST['moneda'];
$convertir= $_POST['convertir'];
$dolar= 29.20;

if ($convertir=="cordoba") {
	$resp_conver= $cant/$dolar;
	echo"Conversion:", $resp_conver;
}
	else
	{
		$resp_conver=$cant*$dolar;
		echo"conversion:", $resp_conver;
	}

?>