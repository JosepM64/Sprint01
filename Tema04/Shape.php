<?php 


class Shape {

    protected $ample;
    protected $alt;

    function __construct ($meuAmple,$meuAlt){

    $this->ample = $meuAmple;
    $this->alt = $meuAlt;

}

function getArea() {
return $this -> alt * $this -> ample;
    }
}


?>


