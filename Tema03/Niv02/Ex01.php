<?php 

//Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de: La intersecció dels dos arrays (nombres en comú) i La mescla dels dos arrays.

$z = array(3,5,6,8.5,9);
$y = array(3.1,5.0,6,8.2,9);

function interseccion($array1, $array2) {

$result = array_intersect($array1,$array2);
return $result;
}

function mezcla($array1, $array2) {
$result2 = array_merge($array1,$array2);
return $result2;
}

$resultado = interseccion($z,$y);
echo "Els valors repetits sòn: ";
print_r($resultado);

$resultado2 = mezcla($z,$y);
echo "Els dos arrays junts ";
print_r($resultado2);
?>