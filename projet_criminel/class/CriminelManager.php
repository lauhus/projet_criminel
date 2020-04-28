<?php

class CriminelManager{

    private $_db;

    public function __construct(){
        $this->set_db();
    }

    public function getCriminel($nom){
        $req=$this->_db->prepare('SELECT * FROM recherches WHERE nom_r=:nom_r');
        $req->bindValue(':nom_r',$nom);
        $req->execute();
        $donnees=$req->fetch(PDO::FETCH_ASSOC);
        return $donnees;
    }

    public function addCriminel($nom,$prenom,$date,$signe,$profil,$nv_a,$nom_ph,$info,$der_ad,$id_createur,$id_createurs){
        $req=$this->_db->prepare('INSERT INTO recherches(
            nom_r,
            prenom_r,
            date_naissance_r,
            signe_distinctif_r,
            profil_psy_r,
            niveau_accreditation,
            nom_photo_r,
            informations_r,
            derniere_adresse_r,
            created_at,
            created_by,
            updated_at,
            updated_by) 
            VALUES (
                :nom_r,
                :prenom_r,
                :date_naissance_r,
                :signe_distinctif_r,
                :profil_psy_r,
                :niveau_accreditation,
                :nom_photo_r,
                :informations_r,
                :derniere_adresse_r,
                NOW(),
                :id_createur,
                NOW(),
                :updated_by)');


        $req->bindValue(':nom_r',$nom);
        $req->bindValue(':prenom_r',$prenom);
        $req->bindValue(':date_naissance_r',$date);
        $req->bindValue(':signe_distinctif_r',$signe);
        $req->bindValue(':profil_psy_r',$profil);
        $req->bindValue(':niveau_accreditation',$nv_a);
        $req->bindValue(':nom_photo_r',$nom_ph);
        $req->bindValue(':informations_r',$info);
        $req->bindValue(':derniere_adresse_r',$der_ad);
        $req->bindValue(':id_createur',$id_createur);
        $req->bindValue(':updated_by',$id_createurs);
        $donnees=$req->execute();

        if (!$donnees) {
            echo "\n criminel PDO::errorInfo():\n";
            print_r($req->errorInfo());
        }
        //return $req;

    }

    public function UpdateCriminel($id_r,$nom,$prenom,$date,$signe,$profil,$nv_a,$nom_ph,$info,$der_ad,$id_createurs){
        $req=$this->_db->prepare('UPDATE recherches SET
            nom_r=:nom_r,
            prenom_r=:prenom_r,
            date_naissance_r=:date_naissance_r,
            signe_distinctif_r=:signe_distinctif_r,
            profil_psy_r=:profil_psy_r,
            niveau_accreditation=:niveau_accreditation,
            nom_photo_r=:nom_photo_r,
            informations_r=:informations_r,
            derniere_adresse_r=:derniere_adresse_r,
            updated_at=NOW(),
            updated_by=:updated_by
            WHERE id_r=:id_r');

        $req->bindValue(':id_r',$id_r);
        $req->bindValue(':nom_r',$nom);
        $req->bindValue(':prenom_r',$prenom);
        $req->bindValue(':date_naissance_r',$date);
        $req->bindValue(':signe_distinctif_r',$signe);
        $req->bindValue(':profil_psy_r',$profil);
        $req->bindValue(':niveau_accreditation',$nv_a);
        $req->bindValue(':nom_photo_r',$nom_ph);
        $req->bindValue(':informations_r',$info);
        $req->bindValue(':derniere_adresse_r',$der_ad);
        $req->bindValue(':updated_by',$id_createurs);
        $donnees=$req->execute();

        if (!$donnees) {
            echo "\n criminel PDO::errorInfo():\n";
            print_r($req->errorInfo());
        }
        //return $req;

    }

    /*public function getAlltable($nom){
        $req=$this->_db->prepare('SELECT date_naissance_r,signe_distinctif_r,profil_psy_r,informations_r,derniere_adresse_r 
        FROM recherches WHERE nom_r=:nom_r
        INNER JOIN acolytes ON recherches.id_r=recherches_id_r1');
        $req->bindValue(':nom_r',$nom);
        $req->execute();
        $donnees=$req->fetch(PDO::FETCH_ASSOC);
        print_r($donnees);
    }*/



    /**
     * Set the value of _db
     *
     * @return  self
     */ 
    public function set_db()
    {
        $this->_db=new PDO('mysql:host=localhost;dbname=criminels;charset=utf8','lauhu','stagiaire ');

        return $this;

    } 

}