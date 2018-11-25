<?php

//Crear cookie sencilla
setcookie("miCookie","Este es el valor de la cookie");
    
//Crear cookie con expiración
setcookie("Unyear", "Este es el valor de la cookie con expiración", time()+(60*60*24*365));

header("location: ver_cookies.php");