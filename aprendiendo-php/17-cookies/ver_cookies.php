<?php

if (isset($_COOKIE['miCookie'])) {
    echo "<h1>".$_COOKIE['miCookie']."</h1>";
}else{
    echo "<h1 style='color: red'>No existe la Cookie</h1>";
}
?>
<a href="crear_cookies.php">Crear Cookie</a><br/>
<a href="borrar_cookies.php">Borrar Cookie</a>