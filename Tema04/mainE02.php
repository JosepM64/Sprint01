<?php 

// Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().


include 'Shape.php';
include 'triangle.php';
include 'rectangle.php';



$rectangle = new Rectangle(10, 4);
echo "Àrea del Rectangle: " . $rectangle->getArea() . "\n";

$triangle = new Triangle(8, 3);
echo "Àrea del Triangle: " . $triangle->getArea() . "\n";



?>