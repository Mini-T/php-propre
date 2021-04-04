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
    //match verification
     $query = $pdo->query("SELECT * FROM Utilisateurs WHERE username = '$safeuser' AND mdp = '$postmdp'");
        $d = $query->fetch(PDO::FETCH_OBJ);
    //Final check
    if($d == true){
        $_SESSION['username'] = $safeuser ;
        echo "done";
        echo $_SESSION['username'];
        exit();
        header('Location:index.php');}
       
    
} 
//Login end?>
<?php require_once('inc/footer.inc.php')?>