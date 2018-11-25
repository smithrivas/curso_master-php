<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    if ($num1>$num2){
        while($num1>=$num2){
            echo $num2.'</br>';
            $num2++;
        }
    }else{
        while($num2>=$num1){
            echo $num1.'</br>';
            $num1++;
        }
    }
}else{
    echo '<h1>ERROR!!!</h1>';
}