<?php
/* Afficher le nb de chiffre pour un nombre donné */

$n = 17;

for($i=1; $i<=$n; $i++):
    for($j=1; $j<=$i; $j++);
        echo $j;
endfor;
echo '<br>';

?>