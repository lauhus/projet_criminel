<?php

require('../class/Autoloader.php');
Autoloader::register();

session_start();
$id=$_SESSION['id'];

$nom_recherche=htmlspecialchars($_POST['nom_recherche_c']);

$crimi_recher=new CriminelManager();

$crimi_rechers=$crimi_recher->getCriminel($nom_recherche);


$id_crimi=$crimi_rechers['id_r'];

$nom=htmlspecialchars($_POST['nom_r']);
$prenom=htmlspecialchars($_POST['prenom_r']);
$date_nai=htmlspecialchars($_POST['date_naissance_r']);
$signe=htmlspecialchars($_POST['signe_distinctif_r']);
$profil=htmlspecialchars($_POST['profil_psy_r']);
$nv_a=htmlspecialchars($_POST['niveau_accreditation']);
$nom_ph=htmlspecialchars($_POST['nom_photo_r']);
$info=htmlspecialchars($_POST['informations_r']);
$der_ad=htmlspecialchars($_POST['derniere_adresse_r']);

$libelle=htmlspecialchars($_POST['libelle_affaire_c']);
$date_c=htmlspecialchars($_POST['date_c']);
$duree=htmlspecialchars($_POST['duree_c']);
$date_libe=htmlspecialchars($_POST['date_liberation_c']);

$coopere=htmlspecialchars($_POST['coopere']);

$localisation=htmlspecialchars($_POST['localisation_t']);
$nature=htmlspecialchars($_POST['nature_t']);
$temoin=htmlspecialchars($_POST['temoin_t']);
$numero_tel=htmlspecialchars($_POST['numero_tel_temoin_t']);
$adresse=htmlspecialchars($_POST['adresse_temoin_t']);
$date_s=htmlspecialchars($_POST['date_s']);

$modifcrimi=new CriminelManager();

$modifcrimi->UpdateCriminel($id_crimi,$nom,$prenom,$date_nai,$signe,$profil,$nv_a,$nom_ph,$info,$der_ad,$id);


$modifcondam=new CondamnationManager();

$modifcondam->UpdateCondamnation($libelle,$date_c,$duree,$date_libe,$id,$id_crimi);


$modifacolytes=new AcolytesManager();

$modifacolytes->UpdateAcolytes($coopere,$id,$id_crimi,$id_crimi);


$modiftemoi=new TemoignagesManager();

$modiftemoi->UpdateTemoignages($localisation,$nature,$temoin,$numero_tel,$adresse,$date_s,$id);



if($crimi_rechers&&$modifcrimi&&$modifcondam&&$modifacolytes&&$modiftemoi){
    header('location:../views_templates/views/backoffice_agent_1.php');
} else {
    header('location:../views_templates/views/view_erreurs.php');
}



