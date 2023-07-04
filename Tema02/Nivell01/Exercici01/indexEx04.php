<?php 

// Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.
    

$c=4; // variable que defineix cada quan es compta.

$finalNum= 20; // aquesta és la variable que canvia.

// si la variable finaNum està buida el parametre per defecte és 20.
function contar($n = 1, $finalNum = 10)
{
    if (empty($finalNum)) {
        $finalNum=10;
    }

// Bucle per comptar desde 0 fins $finalNum    
    for ($i = 0; $i <= $finalNum; $i += $n) {
        echo $i . "\n";
    }
}

contar($c, $finalNum);
?>
