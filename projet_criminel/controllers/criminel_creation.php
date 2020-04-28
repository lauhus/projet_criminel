<?php 
require('../class/Autoloader.php');
Autoloader::register();
session_start();
$id=$_SESSION['id'];


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


$criminel=new CriminelManager();

$criminel->addCriminel($nom,$prenom,$date_nai,$signe,$profil,$nv_a,$nom_ph,$info,$der_ad,$id,$id);

$crimi_ajout=$criminel->getCriminel($nom);

$id_crimi=$crimi_ajout['id_r'];



$criminels=new CondamnationManager();

$criminels->addCondamnation($libelle,$date_c,$duree,$date_libe,$id,$id,$id_crimi);


$crimi_suite=new AcolytesManager();

$crimi_suite->addAcolytes($coopere,$id,$id,$id_crimi,$id_crimi);


$crimi_suites=new TemoignagesManager();

$crimi_suites->addTemoignages($localisation,$nature,$temoin,$numero_tel,$adresse,$date_s,$id,$id,$id_crimi);

$tem=$crimi_suites->getTemoignages($temoin);

$id_t=$tem['id_temoignage'];



$signalement=new SignalementsManager();

$signalement->addSignalements($id_t,$id_crimi,$id,$id);


if ($criminel&&$criminels&&$crimi_suite&&$crimi_suites&&$signalement){
    header('location:../views_templates/views/backoffice_agent_1.php');
} else {
    header('location:../views_templates/views/view_erreurs.php');
}


