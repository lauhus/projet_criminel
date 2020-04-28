<?php 

$pseudo=htmlspecialchars($_POST['pseudo_recherche_a']);


$newspeudo=htmlspecialchars($_POST['pseudo_a']);
$newmdp=htmlspecialchars($_POST['mot_de_passe_a']);
$newnv_a=htmlspecialchars($_POST['niveau_accreditation_a']);

$newmdps=password_hash($newmdp,PASSWORD_DEFAULT);

require('../class/Autoloader.php');
Autoloader::register();

$agent=new AgentManager();

$agents=$agent->getAgent($pseudo);


$id_a=$agents['id_agents'];
//print_r($id_a);

$agent->update($id_a,$newspeudo,$newmdps,$newnv_a);

if ($agent){
    header('location:../views_templates/views/backoffice_agent_1.php');
} else {
    header('location:../views_templates/views/view_erreurs.php');
}
