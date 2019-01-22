<?php
require '../vendor/autoload.php';

// Namespace de la clase
use Spipu\Html2Pdf\Html2Pdf;

// Se crea el objeto para generar el PDF
$html2pdf = new Html2Pdf();
/*
$html = "<h1>Hola Mundo desde una librería de PHP para hacer PDFs</h1>";
$html .= "<p>Master en PHP</p>";
*/

// Recoger la Vista a imprimir
ob_start();
require_once 'pdf_para_generar.php'; // Todo lo que haya entre ob_start() y ob_get_clean() lo puede guardar en una variable.
$html = ob_get_clean();

$html2pdf->writeHTML($html); // Se le pasa la variable con el contenido que se mostrará en el PDF
$html2pdf->output('pdf_generado.pdf'); // Metodo que genera el PDF, se le debe asignar el nombre del archivo.