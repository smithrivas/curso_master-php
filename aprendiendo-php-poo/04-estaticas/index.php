<?php

include_once 'configuracion.php';

Configuracion::setColor("Azul");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color."<br/>";
echo Configuracion::$entorno."<br/>";
echo Configuracion::$newsletter."<br/>";