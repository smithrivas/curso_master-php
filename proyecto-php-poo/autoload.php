<?php
function controllers_autoload($classname){
  include "controllers/".$classname.".php"; // Entra a la carpeta de los controladores y hace un include de cada uno de los controladores.
}

spl_autoload_register('controllers_autoload');
