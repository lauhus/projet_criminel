<?php
session_start();
if($_SESSION['id']>'1'){
  header('location:view_erreurs.php');
} 

$title="Création d'un nouvel agent";
$titre="Création d'un nouvel agent";
?>
<?=ob_start(); ?>
<form action="../../controllers/agent_creation.php" method="post">
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
      <label for="exampleSelect2"> Grade accréditations :</label>
      <select multiple="" class="form-control" name="niveau_accreditation_a" id="exampleSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary"> Créer nouvel agent </button>
  </fieldset>
</form>

<?php $content=ob_get_clean();
require("../templates/tem_crud.php"); ?>