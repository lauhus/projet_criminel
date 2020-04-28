<?php 

class AgentManager{

    private $_db;

    public function __construct(){
        $this->set_db();
    }

    public function getAgent($pseudo){
        $req=$this->_db->prepare('SELECT * FROM agents WHERE pseudo_a=:pseudo_a');
        $req->bindValue(':pseudo_a',$pseudo);
        $req->execute();
        $donnees=$req->fetch(PDO::FETCH_ASSOC);
        return $donnees;
    }

    public function add($pseudo,$mdp,$nv_a){
        $req=$this->_db->prepare('INSERT INTO agents(pseudo_a,mot_de_passe_a,niveau_accreditation_a) VALUES(:pseudo_a,:mot_de_passe_a,:niveau_accreditation_a)');
        $req->bindValue(':pseudo_a',$pseudo);
        $req->bindValue(':mot_de_passe_a',$mdp);
        $req->bindValue(':niveau_accreditation_a',$nv_a);
        $req->execute();
        //return $req;

    }

    public function update($id,$pseudo,$mdp,$nv_a){
        $req=$this->_db->prepare('UPDATE agents SET 
        pseudo_a=:pseudo_a,
        mot_de_passe_a=:mot_de_passe_a,
        niveau_accreditation_a=:niveau_accreditation_a
        WHERE id_agents=:id_agents');
        $req->bindValue(':id_agents',$id);
        $req->bindValue(':pseudo_a',$pseudo);
        $req->bindValue(':mot_de_passe_a',$mdp);
        $req->bindValue(':niveau_accreditation_a',$nv_a);
        $req->execute(); 
        $donnees=$req->fetch(PDO::FETCH_ASSOC);
        //return $donnees;

    }


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


