<?php
include("include/header.inc.php");
try {
    $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
$SimpleSelect = $pdo->query('SELECT * FROM utilisateur'); ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title titre">Register</h5>
            <form method="POST" action="#">
                <input type="text" class="form-control champs" name="email" placeholder="email">
                <input type="text" class="form-control champs" name="Username" placeholder="Username">
                <input type="password" class="form-control champs" id="mdp" name="mdp" placeholder="Password">
                <br>
                 <?php
                 $postmail = "adresse mail";
                 $postign = "Nom d'utilisateur";
                 $postmdp = "mot de passe";
                 InputCompletionCheck($_POST['email'], $_POST['Username'],$_POST['mdp'], $postmail, $postign, $postmdp);?>
                    <?php 
                        $postign = $_POST['Username'];
                        $postmdp = $_POST['mdp'];
                        $crypt = md5($_POST['mdp']);
                        $postmail = $_POST['email'];
                        setcookie('user_id', 'your_id');


                        $register = "INSERT INTO utilisateur(email, ign, mdp) VALUES ('" . $_POST['email'] . "', '" . $_POST['Username'] . "', '" . $crypt . "')";


                        $SelectCountM = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE email = '$postmail'");

                        $SelectCountI = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE ign = '$postign'");

                        $fetchassocshowM = $SelectCountM->fetch(PDO::FETCH_COLUMN);

                        $fetchassocshowI = $SelectCountI->fetch(PDO::FETCH_COLUMN);

                        
                        echo '<br>';


                        if ($fetchassocshowM > 0 or $fetchassocshowI > 0) {
                            if ($fetchassocshowM > 0) { ?>
                                <p>
                                    e-mail déjà attribué
                                </p>
                                <br>
                                <button><a href="FormLogin.php">Login</a></button>
                            <?php } elseif ($fetchassocshowI > 0) { ?>
                                <p>
                                    TON PUTAIN D'IGN EST DEJA PRIS PAUVRE MERDE
                                </p>
                                <br>
                                <button><a href="FormLogin.php">Login</a></button>

                            <?php }
                        } else {
                            try {
                                $pdo->exec($register); ?>
                                <h1> enregistré</h1>
                                
                        <?php } catch (PDOException $e) {
                                echo "command failed" . $e->getmessage;
                            }
                        }
                    
                    
                     ?>
                        

                </div>
                <button type="submit" class="btn btn-primary login" name="register">Register</button>
                <div class="php">
                   
            </form>
    </div>
</div>
<img src="gifs/BOOM.gif" alt="boom" style=”width:250px; padding:25px; border-radius:15px; background-color:aqua”> 
<img src="http://i.stack.imgur.com/SBv4T.gif" alt="this slowpoke moves"  width=250/>

<?php include("include/footer.inc.php"); ?>