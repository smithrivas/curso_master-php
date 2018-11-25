<?php
if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
  if (isset($_POST['sumar'])) {
    $resultado = ($_POST['num1']+$_POST['num2']);
  }elseif (isset($_POST['restar'])) {
    $resultado = ($_POST['num1']-$_POST['num2']);
  }elseif (isset($_POST['multiplicar'])) {
    $resultado = ($_POST['num1']*$_POST['num2']);
  }elseif (isset($_POST['dividir'])) {
    $resultado = ($_POST['num1']/$_POST['num2']);
  }
}else {
  $error = 'Ingresa todos los datos requeridos.';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3 - Calculadora</title>
  </head>
  <body>
    <h1>Calculadora</h1>
    <form action="" method="post">
      <label for="num1">Número 1</label>
      <input type="number" name="num1"><br/><br/>

      <label for="num2">Número 2</label>
      <input type="number" name="num2"><br/><br/>

      <input type="submit" name="sumar" value="sumar">
      <input type="submit" name="restar" value="restar">
      <input type="submit" name="multiplicar" value="multiplicar">
      <input type="submit" name="dividir" value="dividir">
    </form>
    <?php
      if (!empty($error)) {
        echo "<h2 style='color: red;'>ERROR: $error</h2>";
      }elseif (isset($resultado)) {
        echo "<h2 style='color: green;'>Resultado: $resultado</h2>";
      }
    ?>
  </body>
</html>
