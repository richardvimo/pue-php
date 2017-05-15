<?php

/*
* Function to create an array to string with fibonacci max
* int $n variable to clculte fibonacci
* return an array to string
*/
function fibonacci($n) {
  $a=0;
  $b=1;
  $aux=0;
  $aux2=0;
  for ($i=0; $i<$n; $i++) {
      if ($i==0) {
          $aux = "$a,"."$b";
      }
      $aux2=$a+$b;
      $a=$b;
      $b =$aux2;
      $aux = $aux.",".$aux2;
  }
  return  $aux;
}

function mostrarFibo($valor) {
  echo "$valor";
}


$n=5;
mostrarFibo( fibonacci($n) );
