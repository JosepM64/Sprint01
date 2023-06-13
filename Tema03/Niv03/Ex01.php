<?php 

//Donat un array d’enters, fes un programa que:Retorni cada valor de l’array elevat al cub fent servir la funció array_map().

$z = array(2, 3, 4, 5);
// $y =["j","l","v","a","q"];
var_dump($z);
// var_dump($y);

$resultado = array_map(function($valor){
return pow($valor,3);

},$z);

//$resultado = array_chunk($y,2);
print_r($resultado);
var_dump($resultado);

?>