<?php 

//Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de: La intersecció dels dos arrays (nombres en comú) i La mescla dels dos arrays.

// static $z = array(3,5,6,8.5,9);
// static $y = array(3.1,5.0,6,8.2,9);

function interseccion(){

$z = array(3,5,6,8.5,9);
$y = array(3.1,5.0,6,8.2,9);

$result = array_intersect($z,$y);
// return $result;
print_r($result);

}


?>