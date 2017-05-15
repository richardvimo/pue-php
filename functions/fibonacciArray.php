<?php

/*
* Function to create an array with fibonacci max
* int $n variable to clculte fibonacci
* return an array
*/
function fibonacci($n) {
  $fibo=array();
  $x=0;
  $y=1;
  $fibo[]=$x;
  $fibo[]=$y;
  for ($i=2; $i<$n; $i++) {
      $fibo[$i] = $fibo[$i-2]+$fibo[$i-1];
  }
  return  $fibo;
}
//
// echo "<pre>";
// print_r( fibonacci(7) );
// echo "</pre>";
