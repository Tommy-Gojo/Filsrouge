<?php

namespace BackEnd\App\Models;

class UserClass {

    private $id;
    private $pseudo;
    private $mail;
    private $password;
    private $role;

    public function __construct($id, $pseudo, $mail, $password, $role){
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId(){
        return $this->id;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function setRole($role){
        $this->role = $role;
    }
}