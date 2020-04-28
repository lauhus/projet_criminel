<?php 

$pseudo=htmlspecialchars($_POST['pseudo_a']);
$mot_de_passe=htmlspecialchars($_POST['mot_de_passe_a']);
$niveau_a=htmlspecialchars($_POST['niveau_accreditation_a']);
$mdp=password_hash($mot_de_passe,PASSWORD_DEFAULT);

require('../class/Autoloader.php');
Autoloader::register();


$agent=new AgentManager();

if($agents=$agent->add($pseudo,$mdp,$niveau_a)){
    header('location:../views_templates/views/backoffice_agent_1.php');
} else {
    header('location:../views_templates/views/view_erreurs.php');
}
