<?php
require_once 'configuracion.php';

Configuracion::setColor("Blue");
Configuracion::setEntorno("LocalHost");
Configuracion::setNewsletter(true);

echo Configuracion::$color.'<br/>';
echo Configuracion::$entorno.'<br/>';
echo Configuracion::$newsletter.'<br/>';
