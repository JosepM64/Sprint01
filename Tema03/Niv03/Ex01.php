<?php 

//Donat un array d’enters, fes un programa que:Retorni cada valor de l’array elevat al cub fent servir la funció array_map().

$z = array(2, 3, 4, 5);
$y =["j","l","v","a","q"];
var_dump($z);
var_dump($y);

$resultado = array_map(function($z){
return ($z*3);

},$arrayMap);

//$resultado = array_chunk($y,2);
echo $resultado;
var_dump($resultado);
?>