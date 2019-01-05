<?php
/*
try{
    throw new Exception('Errores de lógica');
}catch(Exception $e){
    echo "Se ha presentado un error :( <br/>".$e->getMessage();
}finally{
  echo "<br/>Todo correcto";
}
*/
try {
  if (isset($_GET['id'])) {
    echo "<h1>El parametro es: {$_GET['id']}</h1>";
  }else {
    throw new Exception("No existe el parametro!!");
  }
} catch (Exception $e) {
  echo "Se ha presentado un error :( // ".$e->getMessage();
}
