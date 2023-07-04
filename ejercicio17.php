<?php
//funcion rand es la que pertine crear un nuero añeatorio pra utilizarla debes 
//pasar 2 parametros EJ numeroA = rand(2 , 8)

//numero entero aleatorio
$numeroA = rand(2 , 20);
$numeroB = rand(2 , 20);

$resultado = $numeroA * $numeroB;

echo " el resultado de la multiplicacion de ".$numeroA." y  ".$numeroB." es ".$resultado."<br/>"; 

//$numeroA = rand(1 , 100);
// echo $numeroA;

?>