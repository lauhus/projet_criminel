
<?php

$pseudo =htmlspecialchars($_POST['pseudo_a']);
$mot_de_passe =htmlspecialchars($_POST['mot_de_passe_a']);


require('../class/Autoloader.php');
Autoloader::register();


$agent = new AgentManager();
$agents=$agent->getAgent($pseudo);

//print_r($agents['mot_de_passe_a']);

$mdpbdd=$agents['mot_de_passe_a'];
$pseudobdd=$agents['pseudo_a'];
$idbdd=$agents['id_agents'];
$niveau_a=$agents['niveau_accreditation_a'];

    if ($pseudobdd == $pseudo){
            if (password_verify($mot_de_passe, $mdpbdd))
            {
                session_start();
                $_SESSION['id']=$idbdd;
                $_SESSION['pseudo_a']=$pseudobdd;
                $_SESSION['niveau_a']=$niveau_a;
                    if ($niveau_a=='1'){
                        header('location:../views_templates/views/backoffice_agent_1.php');
                    } elseif ($niveau_a=='2') {
                        header('location:../views_templates/views/backoffice_agent_2.php');
                    } else {
                        header('location:../views_templates/views/backoffice_agent_3.php');
                    }
            } else {
                header('location:../views_templates/viewsview_erreurs.php');
            }
    } else { 
        
        header('location:../views_templates/views/view_erreurs.php');
    }

