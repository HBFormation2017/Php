<?php

// Compter le nb de notes les notes au-dessus de la moyenne
$notes = [10, 12.6, 11, 1, 19, 9.3, 5];

$total = count($notes);
$somme = 0;

for ($i = 0; $i < $total ;$i++):
    $somme += $notes[$i];
endfor;
$moy = $somme/$total;

$sup = 0; $inf = 0;
for($i = 0; $i <$total; $i++):
    if($notes[$i] >= $moy):
        $sup++;
    else:
        $inf++;
    endif;
endfor;

echo 'Moy : ' . $moy .' '.'Il y a'.' '. $inf. ' notes inférieures ' .' et '. $sup. ' ' .'notes supérieures';

?>