<?php

class Persona{
  private $nombre;
  private $edad;
  private $ciudad;

  public function __costruct($nombre, $edad, $ciudad){
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->ciudad = $ciudad;
  }

  public function __call($name, $arguments){
    $prefix_metodo = substr($name, 0, 3);

    if ($prefix_metodo =='get') {
      $nombre_metodo = substr(strtolower($name),3);

      if (!isset($this->$nombre_metodo)) {
        return "No existe el metodo que estás invocando!!";
      }
      return $this->$nombre_metodo;
    }else {
      return "No existe el metodo que estás invocando!!";
    }
  }
}

$persona = new Persona("Carlos",54,"Neiva");
echo $persona->getNombre();
