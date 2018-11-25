<?php

$variable = '';

if (empty($variable)) {    
    $variable = 'Texto en minuscula que será convertido en mayuscula y negrita.';
    echo '<strong>'.strtoupper($variable).'</strong>';
}

