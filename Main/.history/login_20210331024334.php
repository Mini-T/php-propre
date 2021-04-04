<?php require_once('inc/header.inc.php')?>
<form action="#" method="POST">
    <input type="text" name="username" id="username" placeholder="Username">
    <br>
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <br>
    <input type="submit" name="submit" name="submit" id="submit" value="Envoyer">

</form>
<?php
$postuser = $_POST['username'];
$ = htmlentities($postuser, ENT_QUOTES);
$postmdp = $_POST['password'];
//encrypting
$c = md5($postmdp);
// match verification
//Login start
if(!empty($_POST['username'] and !empty($_POST['password']))){
    //Done 
    @login($pdo, $safeuser, $postmdp);
    //Done
} 
//Login end?>
<?php require_once('inc/footer.inc.php')?>