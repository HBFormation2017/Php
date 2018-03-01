<?php
// Pour manipuler les classes il faut créer une fonction autoload afin de les récupérer
function autoLoad($classe) {
    $file = str_replace('\\', '/', $classe).'.php';
    if(file_exists($file)):
        include $file;
    endif;
}

spl_autoload_register('autoLoad');
// Définition du controleur
$controleur = new \Controleur\AnniversaireControleur();
// Avec la méthode GET on récupère l'action et en fonction le résultat ici listing ou detail
$action = (isset($_GET['action']))? $_GET['action'] : 'listing';

switch ($action) {
    case 'listing':
        $controleur->listingAction();
        break;

    case 'detail':
        $controleur->detailAction();
        break;
}