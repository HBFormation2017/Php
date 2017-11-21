<?php

// Calculer la tva et la quantité de chaque produit

$commande = [
              ['prix'=>9.99, 'quantite' =>2],
              ['prix'=>19.50, 'quantite' =>5]
];

$somme = 0;

for($i = 0; $i <count($commande); $i++):
 $somme += $commande[$i]['prix']*$commande[$i]['quantite']*1.2; 

endfor;

echo $somme;

?>