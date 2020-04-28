<?php 
session_start();
$_SESSION['id'];



$title='Erreur';
$titre='Erreur veuillez réessayer.';

ob_start() ?>
<form>
<button type="submit" class="btn btn-primary"> <a href="../../index.php"> Retour a l'accueil </a> </button>
</form>

<?php $content=ob_get_clean();

require("../templates/tem_crud.php"); ?>



