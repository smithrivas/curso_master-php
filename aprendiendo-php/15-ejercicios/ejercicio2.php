<?php

$coleccion = [];

for($i=1;$i<=120;$i++){
    array_push($coleccion, "Elemento-".$i);
}

foreach ($coleccion as $value) {
    echo $value.'<br/>';
}