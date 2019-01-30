<?php

class Coche{

  // Atribtos o propiedades

  // Public = Se accede a el desde cualquier lugar dentro de la clase actual, clases que hereden esta clase o incluso fuera de la clase.
  public $color;

  // Protected = Se puede acceder desde la clase que los define y desde clases que hereden esa clase.
  protected $marca;

  // Private = Solamente desde esa clase.
  private $modelo;
  public $velocidad;
  public $caballaje;
  public $plazas;

  public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas){
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->velocidad = $velocidad;
    $this->caballaje = $caballaje;
    $this->plazas = $plazas;
  }

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

  public function getModelo(){
    return $this->modelo;
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

  public function setMarca($marca){
    $this->marca = $marca;
  }
} // Fin defición de la clase
