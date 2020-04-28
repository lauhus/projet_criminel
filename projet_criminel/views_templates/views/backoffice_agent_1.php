<?php 
session_start();
if($_SESSION['niveau_a']>'1'){
  header('location:view_erreurs.php');
} else { }


$title="Espace Agent :";
$titre=" Espace Agent accréditation 1 :";
?>

<?php ob_start();?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<ul class="nav nav-tabs">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Gérer agent </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="creation_agent.php"> Créer nouvel agent</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="modification_agent.php"> Modifier agent </a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Gérer criminel </a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="creation_criminel.php"> Creer criminel</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="modification_criminel.php"> Modifier criminel</a>
  <div class="dropdown-divider"></div>
</li>
  </div>
<li>
<form action="../../controllers/criminel_recherche.php" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="recherche" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
</li>
    </ul>
</nav>

<?php $content=ob_get_clean();
require("../templates/tem_crud.php");

