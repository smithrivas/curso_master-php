<?php
/*
* Se deben crear estrictamente los metodos que fueron declarados en la interface, si no se crean entonces generar error
*/

interface Ordenador{
  public function encender();
  public function apagar();
  public function reiniciar();
  public function desfragmentar();
  public function detectarUSB();
}

class IMac implements Ordenador{
  private $modelo;

  function getModelo(){
    return $this->modelo;
  }

  function setModelo($modelo){
    $this->modelo = $modelo;
  }

  public function encender(){
    return "Lo que sea";
  }

  public function apagar(){
    return "Lo que sea";
  }

  public function reiniciar(){
    return "Lo que sea";
  }

  public function desfragmentar(){
    return "Lo que sea";
  }

  public function detectarUSB(){
    return "Lo que sea";
  }
}

$maquintos = new IMac();
$maquintos->setModelo("Macbook PRO 2019");
echo $maquintos->getModelo();
var_dump($maquintos);
