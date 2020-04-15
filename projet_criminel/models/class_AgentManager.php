<?php 

class AgentManager{

    private function __construct(){
        $this->
    }

    private function getAgent($pseudo){
        $db=$this->dbConnect();
        $req=$db->prepare('SELECT id,pseudo_a,mot_de_passe_a FROM agents');
        return $req;
    }

    private function dbConnect(){
        try {
            $db=new PDO('mysql:host=localhost;dbname=criminels;charset=utf8','lauhu','stagiaire ');
            return $db ; 
        } catch ( PDOException $E) {
            Die;
        }
    }
}