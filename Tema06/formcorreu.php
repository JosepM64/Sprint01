<?php 

session_start();
$_SESSION['nom'] =$_GET['nom'];

$nom =$_GET['nom'];
$correo=$_GET['correo'];
$city=$_GET['city'];
echo 'Nom: '.$nom."<br>";
echo 'Email: '.$correo."<br>";
echo 'Ciutat: '.$city;


?>