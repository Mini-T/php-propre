<?php require_once('inc/header.inc.php')?>
<form action="#" method="POST">
    <input type="text" name="username" id="username" placeholder="Username">
    <br>
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <input type="submit" name="submit" name="submit" id="submit" value="Envoyer">

</form>
<?php

if(!empty($_POST['username'] and !empty($_POST['password']))){
    $postuser = $_POST['username'];
    $postmdp = $_POST['password'];
    insert($postuser, $postmdp);
} ?>
<?php require_once('inc/footer.inc.php')?>