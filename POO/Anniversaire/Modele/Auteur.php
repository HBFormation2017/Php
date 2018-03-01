<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Modele;

/**
 * Description of Auteur
 *
 * @author HB1
 */
class Auteur {
    /**
     *
     * @var integer
     */
    private $id;
    /**
     *
     * @var string
     *
     */
    private $login;
    /**
     *
     * @param integer $login
     * @return $this
     *
     */
    private $dateanniversaire;
    /**
     *
     * @param string $dateanniversaire
     * @return $this
     *
     */
    function getId() {
        return $this->id;
    }
    /**
     *
     * @param string $login
     * @return $this
     *
     */
    function getLogin() {
        return $this->login;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    function getDateanniversaire() {
        return $this->dateanniversaire;
    }

    function setDateanniversaire($dateanniversaire) {
        $this->dateanniversaire = $dateanniversaire;
        return $this;
    }

}
