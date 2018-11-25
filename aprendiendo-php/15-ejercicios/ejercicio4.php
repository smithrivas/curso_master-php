<?php

$var1 = [1,2,3,4];
$var2 = 'Variable de tipo texto.';
$var3 = 5;
$var4 = TRUE;

if (is_array($var1)){
    echo "<h2>La variable es tipo array.</h2>";
}

if (is_string($var2)) {
    echo "<h2>La variable es string, contenido: $var2</h2>";
}

if (is_integer($var3)) {
    echo "<h2>La variable es tipo entero.</h2>";
}

if (is_bool($var4)) {
    echo "<h2>La variable es tipo Boolean.</h2>";
}