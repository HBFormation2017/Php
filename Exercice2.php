<?php
function notes($reponse){ 
    if ( $reponse <= 10):
    return 'E';
   elseif($reponse <= 20):
    return 'D';
   elseif($reponse <= 30):
    return 'C';
   elseif($reponse <= 40):
    return 'B';
     else:
     return 'A';
   endif;
   }
   
   echo 'Ta note est : ' . notes(1);
   ?>