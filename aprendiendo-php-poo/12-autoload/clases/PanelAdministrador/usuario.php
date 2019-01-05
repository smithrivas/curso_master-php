<?php
namespace PanelAdministrador;

class Usuario{
  public $nombre;
  public $email;

  public function __construct(){
    $this->nombre = "Nelcy Bustos";
    $this->email = "nelcy@bustos.com";
  }
}
