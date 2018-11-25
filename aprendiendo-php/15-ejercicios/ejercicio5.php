<?php

$table = array(
  "ACCION" => array('GTA 5','Call of duty','PUBG'),
  "AVENTURA" => array('Assasins creed','Crash','Prince of persia'),
  "DEPORTES" => array('Fifa 19','Pes 19', 'Moto GP 19')
);
$categorias = array_keys($table);
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>
</table>