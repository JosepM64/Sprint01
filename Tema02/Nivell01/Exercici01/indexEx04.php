<?php 

// Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.
    

$num1 = readline("Escriu Num1 (comptarem fins aquest número): ");
$num2 = readline("Escriu Num2 (farem servir per comptar de un en un, de dos en dos, etc.): ");

if ($num1 == "") {
    $num1 = 10;
}

function contar($num1, $num2) {
    for ($i = 1; $i <= $num1; $i += $num2) {
        echo $i . "\n";
    }

    echo "Hem comptat de $num2 en $num2.\n";
}

contar($num1, $num2);

// Opció 2: És el mateix que l'anterior pero amb "parametre per defecte" he posat 2. ÉS això el que vam parlar a lcasse?

function contar2($num1, $num2 = 2) {
    for ($j = 1; $j <= $num1; $j += $num2) {
        echo $j . "\n";
    }
}

contar2($num1);
?>
