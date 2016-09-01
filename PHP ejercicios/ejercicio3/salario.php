<?php
$pago=$_POST ['pago'];
$hora=$_POST ['hora'];
$inss= 0.15;
$IR= 0.06;

$salario=$pago*$hora;
echo "SALARIO", "<Hr>";
echo "El salario es:", $salario;
echo "<hr>";
echo "<br>";
echo "<br>";
echo "DEDUCCIONES:"; 
echo "<hr>";
echo "INSS:", $salario*$inss; 
echo "<br>";
echo "IR:", $salario*$IR;

?>