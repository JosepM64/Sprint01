<?php 

// Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

class Shape {

    public $ample;
    public $alt;

    function __construct ($meuAmple,$meuAlt){

    $this->ample = $meuAmple;
    $this->alt = $meuAlt;

}

function getArea() {
return $this -> alt * $this -> ample;
    }
}

$shape = new Shape(10, 4);
echo $shape->getArea();


?>


