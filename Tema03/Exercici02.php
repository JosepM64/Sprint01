<?php 
// Mostrar per pantalla la mida de l’array  i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.

$X = array (10, 20, 30, 40, 50,60);
print_r($X);

// eliminem el tercer valor del array
unset($X[2]);
print_r($X);

//EJERCICIO CORREGIDO !!! reorganitzem les claus senceres pero conservant la key inicial. Aten
$X=array_values($X);
print_r($X);




?>