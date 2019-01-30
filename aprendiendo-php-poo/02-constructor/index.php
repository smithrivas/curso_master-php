<?php
require_once 'coche.php';

$coche1 = new Coche("Amarillo","Renault","Clio",150,200,5);
$coche2 = new Coche("Azul","Seat","Panda",120,230,4);
$coche3 = new Coche("Rojo","Mercedes","Clase A",180,180,2);

$coche1->color = "Gris";
$coche1->setMarca("Audi");
var_dump($coche1->getModelo());

var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);
