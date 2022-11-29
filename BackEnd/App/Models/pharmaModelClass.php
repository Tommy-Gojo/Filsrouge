<?php

namespace App\Models;

class Pharma {

    private $id;
    private $nom;
    private $num;
    private $email;
    private $adr;

    public function __construct($id,$nom,$num,$email,$adr) {
        $this->id = $id;
        $this->nom = $nom;
        $this->num = $num;
        $this->email = $email;
        $this->adr = $adr;
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setTitre($nom) {
        $this->nom = $nom;
    }

    public function getNum() {
        return $this->num;
    }
    public function setNum($num) {
        $this->num = $num;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getAdr() {
        return $this->adr;
    }
    public function setAdr($adr) {
        $this->adr = $adr;
    }
}