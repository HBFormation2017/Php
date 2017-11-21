<?php
function note($nbreponses) {
  if ($nbreponses > 0 && $nbreponses <= 10) {
      return 'E';}
  elseif ($nbreponses > 11 && $nbreponses <= 20) {
      return 'D';}
  elseif($nbreponses > 21 && $nbreponses <= 30) {
      return 'C';}
  elseif ($nbreponses > 31 && $nbreponses <= 40) {
      return 'B';}
  elseif ($nbreponses > 41 && $nbreponses <= 50) {
      return 'A';}
}

echo note(15);

?>