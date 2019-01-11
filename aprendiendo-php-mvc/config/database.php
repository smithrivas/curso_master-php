<?php
class database{
  public static function conectar(){
    $conexion = new mysqli("localhost","root","","notas_master"); // Se instancia mysqli y los parametros son el servidor,usuario,contraseña,nombre de la db.
    $conexion->query("SET NAMES 'utf8'"); // Se utiliza para que quede codificado en español y se puedan ingresar tildes y ñ sin errores.

    return $conexion;
  }
}
