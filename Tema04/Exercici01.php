<?php 
// Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).


$employee = new Employee("Josep Maria Tapia", 7000);
$employee->printEmploye();


class Employee {
public $nom;
public $sou;



function __construct ($miNom, $miSou) {

$this ->nom=$miNom;
$this ->sou=$miSou;

}

//getters obtenir el sou
function getSou(){
return $this->sou;

}

// mostrar el sou
function printEmploye(){
echo  $this->nom ." tens un sou de ".$this->sou."\n";
if ($this->sou >6000) {
        echo "Has de pagar";

    } else {
        echo "No has de pagar";
    }
    }  
}

?>