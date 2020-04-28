<?php 

$title='Connectez vous';
?>


<?php ob_start();?>

<form action="controllers/agent_verify.php" method="post" class="form">
        <div class="form-group">
            <label for="exampleInputEmail1">Identifiant agent :</label>
            <input type="text" class="form-control" id="idagent" name="pseudo_a">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="mot_de_passe_a" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $content=ob_get_clean(); 

require('views_templates/templates/tem_base.php') ;

function lau_autoloader($class_name){
    require 'class/'.$class_name.'php';
}
spl_autoload_register('lau_autoloader');