<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo == "image/jpeg" || $tipo == "image/jpg") {
  if (!is_dir('images')) {
    mkdir('images',0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    header("Refresh: 4; URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";

}else{
  // Redireccionar en 4 segundos mientras se muestra el mensaje
  header("Refresh: 4; URL=index.php");
  echo "<h1>Por favor sube una imagen con un formato correcto.</h1>";
}
