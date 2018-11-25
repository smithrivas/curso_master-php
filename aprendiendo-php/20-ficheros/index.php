<?php
// Abrir archivo de texto
$archivo = fopen("fichero_texto.txt", "r");

// Leer archivo de texto
$contenido = fgets($archivo);
echo $contenido.'<hr/>';

// Leer archivos de varias lineas
while (!feof($archivo)) {
  $contenido = fgets($archivo);
  echo $contenido.'<br/>';
}

// Cerrar archivo
fclose($archivo);
