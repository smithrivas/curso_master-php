<?php

if (isset($_COOKIE['miCookie'])) {
    setcookie("miCookie","",time()-100);
    header("location: ver_cookies.php");
}