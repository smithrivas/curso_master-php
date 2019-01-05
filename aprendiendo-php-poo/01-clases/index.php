<?php
// Programación orientada a objetos en PHP(POO)

// Definir clase (molde para crear más objetos de tipo coche con caracteristicas similares)
class Coche{
  // Atributo o propiedades (Variables)
  public $color = "Rojo";
  public $marca = "Ferrari";
  public $modelo = "Aventador";
  public $velocidad = 300;
  public $caballaje = 500;
  public $plazas = 2;

  // Metodos (ANtes funciones), son acciones que hace el objeto
  public function getColor(){
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

} // Fin definición de la clase

// Crear objeto o instanciar la clase
$coche = new Coche();
//var_dump($coche);

// Usar los metodos
$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getColor()."<br/>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coche es: ".$coche->getVelocidad()."<br/>";

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);
