<?php

require_once '../vendor/autoload.php';

//use App\Controllers\HomeController;
//use \ETI\DB\Query;

//$query = new Query();
//var_dump($query->query());

//$home = new HomeController();
//var_dump($home->index());

//var_dump(getTrim("  f-nely "));

//$object = new MyClass;
//var_dump($object->myMethod());

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();