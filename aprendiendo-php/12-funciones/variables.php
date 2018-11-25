<?php

//Variable global
$frase = "Frase de prueba.";

echo $frase;

function holaMundo(){    
    global $frase; //Variable global
    echo "<h1>$frase</h1>";
}

holaMundo();