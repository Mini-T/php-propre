<?php require_once('inc/header.inc.php')?>

<form action="#" method="POST">
<div class="formdisplay">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <input type="submit" name="submit" name="submit" id="submit" value="Envoyer">

</form>
</div>
<div class="displayphp">

    <?php
//Login start
if(!empty($_POST['username']) and !empty($_POST['password'])){
    $postuser = $_POST['username'];
    $safeuser = htmlentities($postuser, ENT_QUOTES);
    $postmdp = $_POST['password'];
    //encrypting
    $cryptmdp = md5($postmdp);
    //Done 
    login($pdo, $safeuser, $postmdp);
    
    //Done
    
} 
//Login end
?>
</div>

<?php require_once('inc/footer.inc.php')?>