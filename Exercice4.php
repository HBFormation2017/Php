<?php

function moyenne($notes){
    $total = 0;
  
    for($i = 0; $i <=5; $i++):
     $total = $total + $notes[$i];
    endfor;
    return $total/6;
  }
  
  $notes = [10, 12.6, 11, 4, 19, 9.3];
  
  echo moyenne($notes);
  ?>