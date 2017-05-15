<?php

/*
* return html from an array
* array array
* string html
*/

function dibujaTabla($array) {

  $html = "<table border=1>";

  $filasMax = sizeof($array);
  $columnasMax = sizeof($array[0]);
  for ($i=0; $i < $filasMax; $i++) {
    $html .= "<tr>";
    for ($j=0; $j < $columnasMax; $j++) {
      $html .= "<td>";

      $html .= $array[$i][$j];

      $html .= "</td>";
    }
    $html .= "</tr>";
  }


  $html .= "</table>";

  return $html;
}
