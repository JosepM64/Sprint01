<?php 

//Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
$nota = readline("Introueix la nota de 0 a 100 \n");
function grau ($nota){
    
    if ($nota < 33) {
            echo  "Reprobat \n";
    }
    else if ($nota <= 44) {
        echo "El grau d'acord amb la nota es Tercera divisió. \n";
    }

     else if ($nota <= 59) {
        echo "El grau d'acord amb la nota es Segona divisió. \n";

    }   
    else if ($nota >= 60) {
        echo "El grau d'acord amb la nota es Primera Divisió. \n";
    }
   
}

grau($nota)


?>