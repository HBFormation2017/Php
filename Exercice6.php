<?php /*
function afficheTout($t) {
  $total = count($t);
  for($i=0; $i<$total; $i++):
      echo $t[$i].' ';
  endfor;
}

$tab = [1,2,3,4,5,6,7,8,9,10];

afficheTout($tab);
*/
?>
<?php
function afficheTout($t){
  $total = count($t);
  
  for($i=0; $i<$total; $i++):
  
  if(is_array($t[$i])):
   afficheTout($t[$i]);
  else:
      echo $t[$i].' ';
  endif;

  endfor;
}

$tab = [1,2,3,4,5,6,7,8,9,[1,10]];

afficheTout($tab);

?>