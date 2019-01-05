<?php
require 'coche.php';

$coche = new Coche("Amarillo","Renault","Clio",150,200,5);
$coche2 = new Coche("Verde","Seat","Panda",259,200,5);
$coche3 = new Coche("Azul","Citroen","Sara",100,200,5);
$coche4 = new Coche("Rojo","Mercedes","Clase A",300,200,2);

$coche->color="Rosa";
$coche->setMarca("Audi");

echo $coche->mostrarInformacion($coche2);
//echo $coche->marca;
//var_dump($coche->getModelo());
//var_dump($coche);
// var_dump($coche2);
// var_dump($coche3);
// var_dump($coche4);
