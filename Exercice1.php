<?php
$age = 18;
function majeur($age){
if ($age >= 18):
return true;
else:
return false;
endif;
}

if (majeur($age)):
echo 'majeur';
else:
echo 'mineur';
endif; 
?>