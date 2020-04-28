<?php

$title='Espace agent';
$titre='Espace agent accréditation 3';

ob_start(); ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<form action="../../controllers/criminel_recherche.php" method="post" class="form-inline my-2 my-lg-0">
        <input name="recherche" class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>



<?php $content=ob_get_clean();

require('../templates/tem_crud.php'); ?>