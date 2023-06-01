<?php 
// Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

$Z = array("hola", "Php", "Html");
$H = "h";

function teCaracter($array, $caracter){
    foreach ($array as $paraula) {
        if (stripos($paraula, $caracter) === false){
            return false;
        }   
    }
    return true;
}

$operacio = teCaracter($Z, $H);
if ($operacio){
    echo "Totes tenen la lletra $H";
} else {
    echo "No totes tenen la lletra $H";
}

?>