<?php 

$texto = "micro computador";
$tamanho = strlen($texto);

echo "<br/>". $texto. " possui " .$tamanho." caracters";
echo "<br/>".strtoupper($texto);
echo "<br/>".strtolower($texto);
echo "<br/>".ucfirst($texto);
echo "<br/>".ucwords($texto);

 ?>