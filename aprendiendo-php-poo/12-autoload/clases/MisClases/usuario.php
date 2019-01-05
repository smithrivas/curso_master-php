<?php
namespace MisClases;

class Usuario{
  public $nombre;
  public $email;

  public function __construct(){
    $this->nombre = "Brayan Rivas";
    $this->email = "brayan@brayan.com";
  }
}
