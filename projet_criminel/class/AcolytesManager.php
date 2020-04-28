<?php

class AcolytesManager{

    private $_db;

    public function __construct(){
        $this->set_db();
    }

    public function addAcolytes($coopere,$id_createur,$id_createurs,$id_crimi,$id_crimis){
        $req=$this->_db->prepare('INSERT INTO acolytes(
            coopere,
            created_at,
            created_by,
            updated_at,
            updated_by,
            recherches_id_r,
            recherches_id_r1)
            VALUES (
                :coopere,
                NOW(),
                :id_createur,
                NOW(),
                :updated_by,
                :id_recherches,
                :id_recherchess)');


        $req->bindValue(':coopere',$coopere);
        $req->bindValue(':id_createur',$id_createur);
        $req->bindValue(':updated_by',$id_createurs);
        $req->bindValue(':id_recherches',$id_crimi);
        $req->bindValue(':id_recherchess',$id_crimis);
        $donnees=$req->execute();

        if (!$donnees) {
            echo "\n acolytes PDO::errorInfo():\n";
            print_r($req->errorInfo());
        }
    }

    public function UpdateAcolytes($coopere,$id_createur,$id_crimi,$id_crimis){
        $req=$this->_db->prepare('UPDATE acolytes SET
            coopere=:coopere,
            updated_at=NOW(),
            updated_by=:updated_by,
            recherches_id_r=:id_recherches,
            recherches_id_r1=:id_recherchess');

        $req->bindValue(':coopere',$coopere);
        $req->bindValue(':updated_by',$id_createur);
        $req->bindValue(':id_recherches',$id_crimi);
        $req->bindValue(':id_recherchess',$id_crimis);
        $donnees=$req->execute();

        if (!$donnees) {
            echo "\n acolytes PDO::errorInfo():\n";
            print_r($req->errorInfo());
        }
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