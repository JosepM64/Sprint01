<?php 
// Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure: nom, edat, email, menjar favorit

$jm = array (
    "nom" => "Josep Maria",
    "edat" =>"59 anys", 
    "email" =>"josepmtapia@gmail.com", 
    "menjar_favorit" =>"el bacallà"

);

print_r($jm);

// echo "Em dic $jm['nom'] tinc $jm['edat'] el meu correu és $jm['email'] i el meu menjar favorit és el $jm['menjar_favorit']";
 // echo "Em dic ".$jm['nom'] ." tinc ".$jm['edat']. " el meu correu és ".$jm['email']. " i el meu menjar favorit és el ".$jm['menjar_favorit'];

echo "Em dic ".$jm['nom']." tinc ".$jm['edat']." el meu correu és ".$jm['email']." i el meu menjar favorit és ".$jm['menjar_favorit'];

?>