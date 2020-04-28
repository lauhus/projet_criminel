<?php 
session_start();
if ($_SESSION['niveau_a']>1){
    header('location:view_erreurs.php');
} 

$title="Modifications agent :";
$titre="Modifications agent :";
?>

<?= ob_start(); ?>
<form action="../../controllers/agent_modifications.php" method="post">
<div class="form-group">
        <label for="exampleInputEmail1"> Rechercher un agent à modifier :</label>
        <input type="text" class="form-control" name="pseudo_recherche_a" id="exampleInputEmail1">
    </div>
        <hr>
    <fieldset>
    <div class="form-group">
        <label for="exampleInputEmail1">Pseudo agent :</label>
        <input type="text" class="form-control" name="pseudo_a" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe :</label>
        <input type="password" class="form-control" name="mot_de_passe_a" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleSelect2"> Grade accréditations</label>
        <select multiple="" class="form-control" name="niveau_accreditation_a" id="exampleSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary"> Modifier agent </button>
    </fieldset>
</form>

<?php $content=ob_get_clean();
require("../templates/tem_crud.php");