<?php require_once('inc/header.inc.php')?>
<form action="#" method="POST">
    <input type="text" name="username" id="username" placeholder="Username">
    <br>
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <br>
    <input type="submit" name="submit" name="submit" id="submit" value="Envoyer">

</form>
<?php

if(!empty($_POST['username'] and !empty($_POST['password']))){
    $postuser = $_POST['username'];
    $safeuser = htmlentities($postuser, ENT_QUOTES);
    $postmdp = $_POST['password'];
    $md5mdp = md5($postmdp);
     $query = $a->query("SELECT COUNT(*) FROM utilisateur WHERE username = '$b' AND mdp = '$c'");
        $d = $query->fetch(PDO::FETCH_ASSOC);
        var_dump($d);
    exit();
    if($content != 0){
        session_start();
        $_SESSION['username'] = $safeuser ;
        echo "done";
        header('Location:index.php');}
       
    
} ?>
<?php require_once('inc/footer.inc.php')?>