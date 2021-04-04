<?php require_once('inc/header.inc.php')?>
<form action="#" method="POST">
    <input type="text" name="username" id="username" placeholder="Username">
    <br>
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <br>
    <input type="submit" name="submit" name="submit" id="submit" value="Envoyer">

</form>
<?php
//Login start
if(!empty($_POST['username'] and !empty($_POST['password']))){
    $postuser = $_POST['username'];
    $safeuser = htmlentities($postuser, ENT_QUOTES);
    $postmdp = $_POST['password'];
    //encrypting
    $md5mdp = md5($postmdp);
    //match verification + Final check
     login($pdo, $safeuser, $postmdp);
    //Final check
   
       
    
} 
//Login end?>
<?php require_once('inc/footer.inc.php')?>