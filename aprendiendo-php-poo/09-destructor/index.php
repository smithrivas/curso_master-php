<?php

class Usuario{
  public $nombre;
  public $email;

  public function __construct(){
    $this->nombre = "Brayan Rivas";
    $this->email = "smithrivas93@gmail.com";
  }

  public function __toString(){
    return "Hola {$this->nombre}, estás registrado con {$this->email}";
  }

  public function __destruct(){
    echo "<br/>Destruyendo el objeto";
  }
}

$usuario = new Usuario();
echo $usuario;
