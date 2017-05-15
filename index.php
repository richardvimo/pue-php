<?php

require_once("functions/dibujaTabla.php");
require_once("functions/tablaMultiplicar.php");
require_once("functions/fibonacci.php");




$miTabla = tablaMultiplicar(3,6);
if(!is_array($miTabla))
  die("NO ARRAY");

$miFibo = fibonacci(9);
if(!is_array($miFibo))
  die("NO ARRAY");


// muestra final
// echo dibujaTabla($miTabla);
echo dibujaTabla($miFibo);



// prueba para el desarrollador
echo "<pre>";
print_r($miFibo);
echo "</pre>";
