<?php 

    // Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.

    $num1 = readline("Escriu Num1: (comptarem fins aquest numero):");
    $num2 = readline("Escriu Num2 que farem servir per comptar de un en un , de dos en dos etc.:");

    if ($num1 == Null) {
        $num1 = 10;
    } else {
        $num1 = $num1;
    }

    function contar($num1, $num2) {
        for ($i = 1; $i <= $num1; $i += $num2) {
            echo $i . "<\n>";
            
        }

        echo "Hem comptant de $num2 en $num2 <\n>";
    }
    contar($num1, $num3);

    // Paràmetre num3 per defecte
    function contar2 ($num1, $num3=2) {
        for ($j = 1; $j <= $num1; $j += $num3) {
        echo $j . "\n";

    }
}
    contar2($num1, $num3);
?>