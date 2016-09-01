<?PHP
$Peso= $_POST ['Peso'];
$Altura= $_POST ['Altura'];

$IMC= $Peso*$Altura;
echo 'El indice de masa corporal es:', $IMC;

?>