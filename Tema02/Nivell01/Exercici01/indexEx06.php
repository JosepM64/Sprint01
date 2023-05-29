<?php 
// Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps. Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

function isBitten() {
$randomNum = rand (0,1);


if($randomNum <= 0.5) {
    return true;

} else {

    return false;

}

if (isBitten()) {
    echo "Charlie t'ha mossegat el dit!";
} else {
    echo "Charlie no t'ha mossegat el dit.";
}


}

?>