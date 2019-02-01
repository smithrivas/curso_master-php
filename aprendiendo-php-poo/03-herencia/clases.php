<?php

class Persona{
  public $nombre;
  public $apellidos;
  public $altura;
  public $edad;

  public function getNombre() {
      return $this->nombre;
  }

  public function getApellidos() {
      return $this->apellidos;
  }

  public function getAltura() {
      return $this->altura;
  }

  public function getEdad() {
      return $this->edad;
  }

  public function setNombre($nombre) {
      $this->nombre = $nombre;
  }

  public function setApellidos($apellidos) {
      $this->apellidos = $apellidos;
  }

  public function setAltura($altura) {
      $this->altura = $altura;
  }

  public function setEdad($edad) {
      $this->edad = $edad;
  }

  public function hablar(){
    return "Estoy hablando";
  }

  public function caminar(){
    return "Estoy caminando";
  }
}

// Con la palabra extends y el nombre de la clase se heredan los atributos y metodos de la otra clase.
class Informatico extends Persona{
    
  public $lenguajes;
  public $experienciaProgramador;
  
  public function __construct() {
      $this->lenguajes = "HTML, CSS y JS";
      $this->experienciaProgramador = 10;
  }

  public function sabeLensguajes($lenguajes){
      $this->lenguajes = $lenguajes;
      return $this->lenguajes;
  }

  public function programar(){
    return "Estoy programando";
  }

  public function repararOrdenador(){
    return "Estoy reparando ordenadores";
  }

  public function hacerOfimatica(){
    return "Estoy escribiendo en word";
  }
}

// Heredas los atributos y metodos de la clase informatico y así mismo los de la clse persona.
class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciaTecnico;
    
    public function __construct() {
        // De esa manera se hereda también el constructor de la clase padre.
        parent::__construct();
        
        $this->auditarRedes = "Experto";
        $this->experienciaTecnico = 5;
    }
}