<?php

Class SignalementsManager{

    private $_db;

public function __construct(){
    $this->set_db();
}


public function addSignalements($id_t,$id_r,$id_createur,$id_createurs){
    $req=$this->_db->prepare('INSERT INTO signalements(
        temoignages_id_temoignage,
        recherches_id_r,
        created_at,
        created_by,
        updated_at,
        updated_by) 
        VALUES (
            :id_temoignages,
            :id_recherches,
            NOW(),
            :id_createur,
            NOW(),
            :updated_by)');


    $req->bindValue(':id_temoignages',$id_t);
    $req->bindValue(':id_recherches',$id_r);
    $req->bindValue(':id_createur',$id_createur);
    $req->bindValue(':updated_by',$id_createurs);
    $donnees=$req->execute();

    if (!$donnees) {
        echo "\n signalements PDO::errorInfo():\n";
        print_r($req->errorInfo());
    }
}

public function Updatesignalements($id_t,$id_r,$id_createurs){
    $req=$this->_db->prepare('UPDATE signalements SET
        temoignages_id_temoignage=:id_temoignages,
        recherches_id_r=:id_recherches,
        updated_at=NOW(),
        updated_by=:updated_by');

    $req->bindValue(':id_temoignages',$id_t);
    $req->bindValue(':id_recherches',$id_r);
    $req->bindValue(':updated_by',$id_createurs);
    $donnees=$req->execute();

    if (!$donnees) {
        echo "\n signalements PDO::errorInfo():\n";
        print_r($req->errorInfo());
    }
}

public function getSignalement($id_r){
    $req=$this->_db->prepare('SELECT * FROM signalements WHERE recherches_id_r=:id_r');
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