<?php

//Función para recorrer array
function mostrarArray($numeros){
    $resultados = '';
    foreach ($numeros as $valor) {
        $resultados .= $valor.'<br/>';
    }
    return $resultados;
}

//Array
$numeros = [13,54,66,87,71,3,12,55];

//Recorrer y mostrar
echo '<h2>Array</h2>';
echo mostrarArray($numeros);

//Recorrer y mostrar array ordenado
echo '<h2>Array ordenado</h2>';
sort($numeros);
echo mostrarArray($numeros);

//Mostrar longitud
echo '<h2>Longitud del array</h2>';
echo 'La longitud del array es: '.count($numeros).' registros.';

//Buscar en el array
echo '<h2>Buscar en el array</h2>';
if (isset($_GET['numero'])) {
    $busqueda = $_GET['numero'];
$search = array_search($busqueda, $numeros);
if (!empty($search)) {
    echo "El número buscado existe en el indice: $search";
} else {
    echo 'El número no existe.';
}
}
