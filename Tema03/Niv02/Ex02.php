<?php 
// Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10). A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.

$alumnes = array(
    'Maria' => array(7, 8, 6, 9, 8),
    'Joan' => array(9, 7, 8, 6, 7),
    'Anna' => array(8, 9, 7, 8, 9),
    'Pere' => array(6, 7, 8, 7, 6),

    );

function mitjanaNotes($notes){
    $total = array_sum($notes);
    $count = count($notes);
    return  $total / $count;
}
// Lista les notes dels alumnes i mitjana de cada alumne
foreach($alumnes as $alumne => $notes){
    echo "Notes de ".$alumne.": ".implode(',', $notes)."\n";
    echo "Mitjana notes del ".$alumne.": ".mitjanaNotes($notes)."\n";

}


?>