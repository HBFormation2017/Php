<?php
function plusFroid($temperatures){
	$t = $temperatures[0];

	for($i = 1; $i <=5 ; $i++):
		if($temperatures[$i] < $t):
			$t = $temperatures[$i];
		endif;
	endfor;

	return $t;
}

$temperatures = [10, 12.6, 11, -1, 19, 9.3];

echo plusFroid($temperatures);

?>