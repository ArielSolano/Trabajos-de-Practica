<?php

	$distancia=$_POST['distancia'];
	$pul=2.5;
	$mtros=100;
	$kilometro=100000;

	echo "Resultado de la conversion";
	echo '<hr>';

	if (!empty($_POST['pulgadas'])){
		$pulgadas=$_POST['pulgadas'];
		echo ($distancia/$pul).' pulg';
		echo '<br>';
	}
	if(!empty($_POST['metros'])){
		$metros=$_POST['metros'];
		echo ($distancia/$mtros).' mts';
		echo '<br>';
	}
	if(!empty($_POST['kilometros'])){
		$kilometros=$_POST['kilometros'];
		echo ($distancia/$kilometro).' Km';
	}


?>