<?php
$error = true;
if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
  //echo "<h1>Datos OK</h1>";
  $error = 'ok';
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $edad = $_POST['edad'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  //Validar el nombre
  if (!is_string($nombre && !preg_match("/[a-zA-Z]/",$nombre))) {
    $error = 'Nombre';
  }
}else {
  $error = 'faltan_valores';
}

if ($error != 'ok') {
  header("location: index.php?error=".$error);
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validación del Formulario</title>
  </head>
  <body>
    <?php if($error='ok'): ?>
      <h1 style="color:green">Datos validados correctamente</h1>
      <p><?=$nombre?></p>
      <p><?=$apellidos?></p>
      <p><?=$edad?></p>
      <p><?=$email?></p>
    <?php endif; ?>
  </body>
</html>
