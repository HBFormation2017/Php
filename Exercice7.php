<?php

// Ecrire une fonction qui fait la somme des nombres de 0 à 1000 divisibles par 3 ou 5

$i = 0;
$somme = 0;

while ($i<= 1000):
 if($i%3 == 0 || $i%5 == 0):
 $somme += $i;
 endif;
$i++;
     
endwhile;
   
echo $somme;

?>