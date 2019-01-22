<?php
require_once '../vendor/autoload.php';

// Conexion a DB
$conexion = new mysqli("localhost","root","","notas_master"); // Se instancia mysqli y los parametros son el servidor,usuario,contraseña,nombre de la db.
$conexion->query("SET NAMES 'utf8'"); // Se utiliza para que quede codificado en español y se puedan ingresar tildes y ñ sin errores.

// Consulta para contar elementos totales
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
$numero_elementos = $consulta->fetch_object()->total;
$numero_elememtos_pagina = 2;

// Hacer paginacion
$pagination = new Zebra_Pagination();

// Número total de elementos a paginar
$pagination->records($numero_elementos);

// Número de elementos por pagina
$pagination->records_per_page($numero_elememtos_pagina);

// COnseguir número de página en la URL
$page = $pagination->get_page();

$empieza_aqui = (($page-1)*$numero_elememtos_pagina);
$sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elememtos_pagina";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while ($nota=$notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3></hr>";
}

$pagination->render();
