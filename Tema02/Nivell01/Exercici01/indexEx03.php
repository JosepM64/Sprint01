<?php 
$X = 8;
$Y = 6;
$N = 4.34;
$M = 2.28;

//El valor i tupus de cada variable.
echo "Variable X val $X i la Y val $Y i son de tipus: \n" ;
echo var_dump($X);
echo var_dump($Y);
//suma
echo $X+$Y."\n";
//resta
echo $X-$Y."\n";
//producte
echo $X*$Y."\n";
//modul
echo $X%$Y."\n";
/// el mateix per N i M
echo "Variable N val $N i la M val $M i son de tipus: \n" ;
echo var_dump($N);
echo var_dump($M);
//suma
echo $N+$M."\n";
//resta
echo $N-$M."\n";
//producte
echo $N*$M."\n";
//modul
echo $N%$M."\n";

// doble de cada variable
/*
function doble($num){
    return $num*2;   
}

$2X = doble($X);
$2Y = doble($Y);
$2N = doble($N);
$2M = doble($M);
echo $2X." ".$2Y. " ".$2N." " . $2M;
*/
/// suma de totes les variables
echo $X+$Y+$N+$M ." suma \n";
/// producte
echo $X*$Y*$N*$M ." producte \n";

//b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.

$num1 = readline("Escriu Num1:");
$num2 = readline("Escriu Num2:");
$opcio = readline("Que vols fer 1-sumar, 2-restar, 3-multiplicar-4-dividir:");

switch ($opcio){

    case 1:suma:
        echo $num1 +$num2;
        break;

    case 2:resta:
        echo $num1-$num2;
        break;

    case 3: multiplicació:
        echo $num1*$num2;
        break;

    case 4: div:
        echo $num1/$num2;
        break;
     
        default: 
        echo "Opción incorrecta";
    break;
    }




?>