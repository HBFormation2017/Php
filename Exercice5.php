<?php

function surface($value, $forme) {
  switch($forme):
  case "square":
   $s = $value*$value;
  break;
  case "circle":
   $s = $value*$value*3.14;
  break;
  default:
   $s = "Forme inconnue";
  endswitch;
  
  return $s;
}

echo surface(10, "square");

?>