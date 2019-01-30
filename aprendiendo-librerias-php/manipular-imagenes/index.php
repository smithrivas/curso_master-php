<?php

// Se carga el autoload
require_once '../vendor/autoload.php';

// Ruta de la foto original
$foto_original = 'mifoto.jpg';
// ruta y nombre de como se guardará la nueva imagen
$guardar_en = 'fotomodificada.jpg';

// Se crea el objeto y como parametro se le pasa la ruta de la imagen
$thumb = new PHPThumb\GD($foto_original);

// Se llama un metodo, en este caso uno para redimensionar
$thumb->resize(250,250);

// Recortar imagen
$thumb->cropFromCenter(200, 100);

// Se muestra la nueva imagen
$thumb->show();

// Se guarda la nueva imagen pasandole la ruta donde se hará
$thumb->save($guardar_en);
