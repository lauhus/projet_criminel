<?php
session_start();
if ($_SESSION['niveau_a']>'1'){
    header('location:view_erreurs.php');
} else {  }

$title="Modification d'un criminel :";
$titre="Modification d'un criminel :";
?>

<?=ob_start(); ?>
        <form action="../../controllers/criminel_modifications.php" method="post">
        <label for="nom">Rechercher un criminel avec son nom : </label>
            <input type="text" class="form-control" name="nom_recherche_c" id="nom" >

        <legend>Informations personnel :</legend>
        <div class="form-group">
            <label for="nom">Nom </label>
            <input type="text" class="form-control" name="nom_r" id="nom" >
            <label for="nom"> Prénom </label>
            <input type="text" class="form-control" name="prenom_r" id="nom" >
            <label for="nom"> Date de naissance:  </label>
            <input type="date" class="form-control" name="date_naissance_r" id="nom" >
        </div>
        <div class="form-group">
            <label for="exampleTextarea"> Signe distinctif : </label>
            <textarea class="form-control" name="signe_distinctif_r" id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleTextarea"> Profil psychologique : </label>
            <textarea class="form-control" name="profil_psy_r" id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleSelect1"> Niveau accréditation</label>
            <select class="form-control" name="niveau_accreditation" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            </select>
        </div>
        <div class="form-group">
        <label for="nom">Nom photo </label>
            <input type="text" class="form-control" name="nom_photo_r" id="nom" >
        </div>
        <div class="form-group">
            <label for="exampleTextarea"> Informations : </label>
            <textarea class="form-control" name="informations_r" id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label for="nom"> Dernière adresse connue : </label>
            <input type="text" class="form-control" name="derniere_adresse_r" id="nom" >
        </div>
        <hr>
            <legend>Condamnations</legend>
        <div class="form-group">
            <label for="nom"> Libellé affaire :  </label>
            <input type="text" class="form-control" name="libelle_affaire_c" id="nom" >
            <label for="nom"> Date condamnation :  </label>
            <input type="date" class="form-control" name="date_c" id="nom">
            <label for="nom"> Durée condamnation :  </label>
            <input type="number" class="form-control" name="duree_c" id="nom" >
            <label for="nom"> Date libération :  </label>
            <input type="date" class="form-control" name="date_liberation_c" id="nom">
        </div>
        <hr>
        <legend> Acolytes :</legend>
        <div class="form-group">
            <label for="exampleSelect1"> Nombres acolytes</label>
            <select class="form-control" name="coopere" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            </select>
        </div>
        <hr>
            <legend> Témoignages :</legend>
        <div class="form-group">
            <label for="nom">Localisation : </label>
            <input type="text" class="form-control" name="localisation_t" id="nom" >
            <label for="nom"> Nature : </label>
            <input type="text" class="form-control" name="nature_t" id="nom" >
            <label for="nom"> Nom du témoin : </label>
            <input type="text" class="form-control" name="temoin_t" id="nom" >
            <label for="nom"> Numéro téléphone témoin : </label>
            <input type="text" class="form-control" name="numero_tel_temoin_t" id="nom" >
            <label for="nom"> Adresse témoin : </label>
            <input type="text" class="form-control" name="adresse_temoin_t" id="nom" >
            <label for="nom"> Date témoignages :  </label>
            <input type="date" class="form-control" name="date_s" id="nom">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer modifications</button>
        </form>

<?php $content=ob_get_clean();
require("../templates/tem_crud.php"); ?>