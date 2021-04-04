<?php require_once('inc/header.inc.php') ?>
<div class="placement-center">
    <form action="#" method="POST" class="formbox">
        <div class="formdisplay">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="submit" name="submit" name="submit" id="submit" value="Envoyer">
        </div>
</div>

<div class="displayphp">

    <?php
    //Login start
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
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
</form>
<?php require_once('inc/footer.inc.php') ?>