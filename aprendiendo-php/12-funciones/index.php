<?php

function Tabla($numero){
    echo "<h1>Tabla del $numero</h1>";
    for($i=1;$i<=10;$i++){
        $operacion = $numero*$i;
        echo "$i x $numero = $operacion<br/>";
    }
}

for($i=1;$i<=10;$i++){
    Tabla($i);
}