<?php

class CondamnationManager{

private $_db;

public function __construct(){
    $this->set_db();
}



public function addCondamnation($libelle,$date,$duree,$date_libe,$id_createur,$id_createurs,$id_crimi){
        $req=$this->_db->prepare('INSERT INTO condamnations(
            libelle_affaire_c,
            date_c,
            duree_c,
            date_liberation_c,
            created_at,
            created_by,
            updated_at,
            updated_by,
            recherches_id_r) 
            VALUES (
                :libelle_affaire_c,
                :date_c,
                :duree_c,
                :date_liberation_c,
                NOW(),
                :id_createur,
                NOW(),
                :updated_by,
                :id_recherches)');


        $req->bindValue(':libelle_affaire_c',$libelle);
        $req->bindValue(':date_c',$date);
        $req->bindValue(':duree_c',$duree);
        $req->bindValue(':date_liberation_c',$date_libe);
        $req->bindValue(':id_createur',$id_createur);
        $req->bindValue(':updated_by',$id_createurs);
        $req->bindValue(':id_recherches',$id_crimi);
        $donnees=$req->execute();

        if (!$donnees) {
            echo "\n condamnations PDO::errorInfo():\n";
            print_r($req->errorInfo());
        }
    }

    public function UpdateCondamnation($libelle,$date,$duree,$date_libe,$id_createurs,$id_crimi){
        $req=$this->_db->prepare('UPDATE condamnations SET
            libelle_affaire_c=:libelle_affaire_c,
            date_c=:date_c,
            duree_c=:duree_c,
            date_liberation_c=:date_liberation_c,
            updated_at=NOW(),
            updated_by=:updated_by,
            recherches_id_r=:id_recherches');

        $req->bindValue(':libelle_affaire_c',$libelle);
        $req->bindValue(':date_c',$date);
        $req->bindValue(':duree_c',$duree);
        $req->bindValue(':date_liberation_c',$date_libe);
        $req->bindValue(':updated_by',$id_createurs);
        $req->bindValue(':id_recherches',$id_crimi);
        $donnees=$req->execute();

        if (!$donnees) {
            echo "\n condamnations PDO::errorInfo():\n";
            print_r($req->errorInfo());
        }
    }

    public function getCondamnation($id_r){
        $req=$this->_db->prepare('SELECT * FROM condamnations WHERE recherches_id_r=:id_r');
        $req->bindValue(':id_r',$id_r);
        $req->execute();
        $donnees=$req->fetch(PDO::FETCH_ASSOC);
        return $donnees;
    }



        /** 
        * @return  self
        */ 
    public function set_db()
    {
        $this->_db=new PDO('mysql:host=localhost;dbname=criminels;charset=utf8','lauhu','stagiaire ');

        return $this;

    } 
}