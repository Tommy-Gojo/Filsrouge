<?php

namespace App\Models;

use BackEnd\App\Models\ModelClass as Model;
use BackEnd\App\Models\pharmaModelClass as PMC;

class PharmaManager extends Model{

    private $pharma;

    public function ajoutPharma($pharma){
        $this->pharma[] = $pharma;
    }

    public function getPharma(){
        return $this->pharma;
    }

    public function getPharmaById($id) {
        foreach($this->Pharma as $Pharma) {
            if ($Pharma->getId() === $id) {
                return $Pharma;
            }
        }
        echo'Le livre que vous cherchez n\'existe pas';
    }

    public function chargementPharma() {
        $sql = "SELECT * FROM pharma";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();
        $data = $req->fetchAll(\PDO::FETCH_OBJ);
        foreach($data as $value) {
            $add = new Pharma($value->id,$value->nom,$value->num,$value->email,$value->adr);
            $this->ajoutPharma($add);
        }
    }

    public function ajoutPharmaBD($name_pharma, $num_pharma, $email_pharma, $add_pharma){
        $sql = "INSERT INTO pharma (name_pharma, num_pharma, email_pharma, add_pharma) values (:name_pharma,:num_pharma,:email_pharma,:add_pharma)";
        $req = $this->getBdd()->prepare($sql);
        $result = $req->execute([
            ":name_pharma"=>$name_pharma,
            ":num_pharma"=>$num_pharma,
            ":email_pharma"=>$email_pharma,
            ":add_pharma"=>$add_pharma
        ]);
    }

    public function supprimerPharmaBD($id_pharma) {
        $sql = "DELETE FROM pharma WHERE id_pharma = :id_pharma";
        $req = $this->getBdd()->prepare($sql);
        $result = $req->execute([
            ":id_pharma" => $id_pharma
        ]);
    }

    public function modifierPharmaBD($name_pharma,$num_pharma,$email_pharma,$add_pharma) {
        $sql = "UPDATE pharma SET name_pharma = :name_pharma, num_pharma = :num_pharma, email_pharma = :email_pharma , add_pharma = :add_pharma WHERE id_pharma = :id_pharma";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([
            ":name_pharma" => $name_pharma,
            ":num_pharma" => $num_pharma,
            ":email_pharma" => $email_pharma,
            ":add_pharma" => $add_pharma
        ]);
    }
}