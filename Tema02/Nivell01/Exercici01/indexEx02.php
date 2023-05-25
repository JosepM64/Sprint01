<?php 
//Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:
$hello= "Hello, World!";
echo $hello ."\n";

//Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
$majus = strtoupper($hello);
echo $majus."\n";

//Imprimeix per pantalla la mida (longitud) de la variable.
$length = strlen($hello);
echo $length ."\n";

// Imprimeix per pantalla l'string en ordre invers de caràcters.
$invert = strrev($hello);
echo $invert."\n";

//Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.
$contigut = "Aquest és el curs de PHP";
echo $hello." ".$contigut;


?>


