<?php

// Ecrire une fonction qui fait la factorisation d'un nombre

function factorisation($valeur) {
    $total = 1;
  
    for($i = 1; $i <=$valeur; $i++):
     $total = $total * $i;
    endfor;
    return $total;
  }
  
  $valeur = 10;
  
  echo factorisation($valeur);

  ?>