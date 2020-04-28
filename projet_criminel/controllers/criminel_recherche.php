<?php 

$nomrecherche=htmlspecialchars($_POST['recherche']);

require('../class/Autoloader.php');
Autoloader::register();

$criminel=New CriminelManager;
$criminels=$criminel->getCriminel($nomrecherche);

//print_r($criminels);

$nombdd=$criminels['nom_r'];
$idbdd=$criminels['id_r'];

if ($idbdd=='1'){
    header('location:../views_templates/views/fiches_1.php');
} elseif ($idbdd=='2') {
    header('location:../views_templates/views/fiches_2.php');
} elseif ($idbdd=='3') {
    header('location:../views_templates/views/fiches_3.php');
} elseif ($idbdd=='4') {
    header('location:../views_templates/views/fiches_4.php');
} else {
    header('location:../views_templates/views/view_erreurs.php');
}

