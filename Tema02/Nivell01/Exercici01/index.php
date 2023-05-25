<?php 
// Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
$x=5;
$y=5.34;
$z="Josep Maria";
$a=True;

echo "Variable ineger $x \n"."Variable double $y \n"."Variable string $z \n"."Variable boolean $a \n";

//Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
define ("Nom", "Josep Maria");

echo "Nom: ". Nom. "\n";
// en html se habria de poner la variable entre las etiquetas <H1> Nom </H1> para que tuviera el formato título
?>
