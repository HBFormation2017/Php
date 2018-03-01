<?php
namespace Controleur;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AnniversaireControleur {

    public function listingAction() {
        // $am = AuteurManager.php
        $am = new \Modele\AuteurManager();
        $auteurs = $am->getList();
        //var_dump($auteurs);

        include 'Vue/listing.html.php';
    }

    public function detailAction() {
        $id = $_GET['id'];
        $am = new \Modele\AuteurManager();
        $detail = $am->getAuteurById($id);
        //var_dump($auteurs);
        include 'Vue/detail.html.php';
    }
}
