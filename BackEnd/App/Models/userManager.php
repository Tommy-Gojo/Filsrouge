<?php

namespace BackEnd\App\Models;

use BackEnd\App\Models\ModelClass as Model;
use BackEnd\App\Models\UserClass as User;

class UserManager extends Model{
    
    public function findUser($pseudo) {
        $sql = "SELECT * FROM users WHERE pseudo_user = :pseudo";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->execute([
            ":pseudo" => $pseudo
        ]);
        $data = $stmt->fetch(\PDO::FETCH_OBJ);
        if ($data) {
            $user = new User($data->id_user,$data->pseudo,$data->mail,$data->password,$data->role);
            return $user;
        } else {
            return null;
        }
    }
    public function findMdp($mdp){
        $sql = "SELECT * FROM users WHERE mdp_user = :mdp";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->execute([
            ":mdp" => $mdp
        ]);
        $data = $stmt->fetch(\PDO::FETCH_OBJ);
        if ($data) {
            $mdp = new User($data->id,$data->pseudo,$data->mail,$data->password,$data->role);
            return $mdp;
        } else {
            return null;
        }
    }
    public function findMail($mail) {
        $sql = "SELECT * FROM users WHERE mail_user = :mail";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->execute([
            ":mail" => $mail
        ]);
        $data = $stmt->fetch(\PDO::FETCH_OBJ);
        if ($data) {
            $user = new User($data->id_user,$data->pseudo_user,$data->mail_user,$data->mdp_user,$data->role_user);
            return $user;
        } else {
            return null;
        }
    }
    public function insertMail($pseudo, $mail, $Mdp) {
        $sql = "INSERT INTO users (pseudo_user, mail_user, mdp_user)VALUES (:pseudo, :mail, :mdp)";
        $req = $this->getBdd()->prepare($sql);
        $result = $req->execute([
            ":pseudo"=>$pseudo,
            ":mail"=>$mail,
            ":mdp"=>$Mdp
        ]);
    }
    // public function checkPass($Password) {
    //     $sql = "SELECT * FROM users WHERE mdp_user = :mdp";
    //     $stmt = $this->getBdd()->prepare($sql);
    //     $stmt->execute([
    //         ":mdp" => $Password
    //     ]);
    //     $data = $stmt->fetch(\PDO::FETCH_OBJ);
    //     if ($data) {
    //         return $data;
    //     } else {
    //         return null;
    //     }
    // }
}