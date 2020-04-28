<?php
session_start();

require('../../class/Autoloader.php');
Autoloader::register();

$title="CRIMINEL 4";
$photo="<img src='../../public/petrov.jpg'";
$nomcriminel="PETROV DIMITRI";

$nom='petrov';

$criminel=new CriminelManager();
$criminels=$criminel->getCriminel($nom);

$id_r=$criminels['id_r'];
$date_naissance=$criminels['date_naissance_r'];
$signe=$criminels['signe_distinctif_r'];
$profil=$criminels['profil_psy_r'];
$information=$criminels['informations_r'];
$derniere_ad=$criminels['derniere_adresse_r'];

$condam=new CondamnationManager();
$condamna=$condam->getCondamnation($id_r);

$libelle=$condamna['libelle_affaire_c'];
$date_c=$condamna['date_c'];
$duree=$condamna['duree_c'];
$date_libe=$condamna['date_liberation_c'];

$signa=new SignalementsManager();
$signalement=$signa->getSignalement($id_r);
$id_t=$signalement['temoignages_id_temoignage'];

$temoi=new TemoignagesManager();
$temoignage=$temoi->getTemoignagesId($id_t);

$localisation=$temoignage['localisation_t'];
$nature=$temoignage['nature_t'];



if ($_SESSION['niveau_a']<'3'){
ob_start(); ?>
<h3> Informations criminel : </h3>
<p> Date de naissance : <?= $date_naissance?> <br>
Signe distinctif : <?=$signe?>. <br>
Profil psychologique : <?=$profil?> . <br>
Informations : <?=$information?> . <br>
Dernière adresse connue : <?=$derniere_ad?> . <br> </p>
<h3>Condamnations : </h3>
<p> Libellé affaire : <?=$libelle?>  <br> 
Date condamnation : <?=$date_c?> <br>
Durée peine : <?=$duree?> <br>
Date libération : <?=$date_libe?> <br> </p>
<h3> Temoignages : </h3> 
<p> Localisation : <?=$localisation?> <br>
Nature : <?= $nature ?></p>


<footer > <a href="../views/modification_criminel.php"> Modifier fiche criminel </a> </footer>
<?php $content=ob_get_clean();
} else {
    ob_start(); ?>

Dernière adresse connue : <?=$derniere_ad?> . <br> </p>


<?php $content=ob_get_clean();

}

require_once('../templates/tem_fiches_criminels.php');