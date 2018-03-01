<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Modele;

use PDO;

/**
 * Description of ModeleManager
 *
 * @author HB1
 */
class AuteurManager {
    /**
     *
     * @var PDO
     */
    private $pdo;

    function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=catalogue','root','', [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
        );
    }

    public function getList() {
        $sql = 'SELECT id, login, dateanniversaire FROM auteur ORDER BY dateanniversaire ASC';
        $result = $this->pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, Auteur::class);
        $auteurs = $result->fetchAll();
        return $auteurs;
    }

    public function getAuteurById() {
        $id = $_GET['id'];
        $sql = 'SELECT id, login, dateanniversaire FROM auteur WHERE id=?';
        $result = $this->pdo->prepare($sql);
        $result->bindParam(1, $id, PDO::PARAM_INT); // $id prendra la valeur du paramètre qu'on lui donnera
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, Auteur::class);
        return  $detail = $result->fetch();


}

}
