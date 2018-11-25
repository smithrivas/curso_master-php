<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validación del Formulario</title>
  </head>
  <body>
    <h1>Validar formularios en PHP</h1>

    <?php
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      if ($error=="faltan_valores") {
        echo '<strong style="color:red">Introduce todos los campos en los valores correspondientes.</strong>';
      }
    }
    ?>

    <form action="procesar_formulario.php" method="post">
      <label for="nombre">Nombre</label><br/>
      <input type="text" name="nombre" required pattern="[A-Za-z]+"><br/>

      <label for="apellidos">Apellidos</label><br/>
      <input type="text" name="apellidos" required pattern="[A-Za-z]+"><br/>

      <label for="edad">Edad</label><br/>
      <input type="number" name="edad" required pattern="[0-9]+"><br/>

      <label for="email">Email</label><br/>
      <input type="email" name="email" required><br/>

      <label for="pass">Contraseña</label><br/>
      <input type="password" name="pass" required><br/><br/>

      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
