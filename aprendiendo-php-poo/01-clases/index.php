<?php

class Coche{

  // Atribtos o propiedades
  public $color = "Rojo";
  public $marca = "ferrari";
  public $modelo = "Aventador";
  public $velocidad = 300;
  public $caballaje = 500;
  public $plazas = 2;

  // Metodos o acciones
  public function getColor(){
    // Acceder a una propiedad perteneciente a la clase
    return $this->color;
  }

  public function setColor($color){
    $this->color = $color;
  }

  public function setModelo($modelo){
    $this->modelo = $modelo;
  }

  public function acelerar(){
    $this->velocidad++;
  }

  public function frenar(){
    $this->velocidad--;
  }

  public function getVelocidad(){
    return $this->velocidad;
  }
} // Fin defición de la clase

// Crear objeto o instanciar clase
$coche = new Coche();
//var_dump($coche);
echo "El color inicial es ".$coche->color."</br>";
$coche->setColor("Verde");
echo "El nuevo color es ".$coche->color."</br>"; // Consultando directamente al atributo
echo "El nuevo color es ".$coche->getColor()."</br>"; // Consultando el atributo a través de un metodo
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo "La velocidad es ".$coche->getVelocidad()."</br>";

echo "<hr/>";

$coche2 = new Coche();
$coche->setModelo("Gallardo");
$coche->setColor("Amarillo");

var_dump($coche);
var_dump($coche2);
