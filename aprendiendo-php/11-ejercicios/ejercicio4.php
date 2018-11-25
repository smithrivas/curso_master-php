<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    echo '<h1>OPERACIONES</h1>';
    echo "Suma : $num1+$num2=".($num1+$num2)."</br>";
    echo "Resta : $num1-$num2=".($num1-$num2)."</br>";
    echo "Multiplicación : $num1*$num2=".($num1*$num2)."</br>";
    echo "Divición : $num1/$num2=".($num1/$num2)."</br>";
}else{
    echo '<h1>ERROR!!!</h1>';
}