<?php require_once('inc/header.inc.php') ?>
<div class="formdisplay">

    <form method="POST" action="#">
        <input type="email" class="champs" name="email" placeholder="email">
        <input type="text" class="champs" name="Username" placeholder="Username">
        <input type="password" class="champs" id="mdp" name="mdp" placeholder="Password">
        <br>
        <div class="displayphp">

            <?php
            $tablename = 'utilisateur';
            $colname1 = 'mail';
            $colname2 = 'username';
            $colname3 = 'mdp';
            $content1 = htmlentities($_POST['mail'], ENT_QUOTES);
            $content2 = htmlentities($_POST['username'], ENT_QUOTES);
            $content3 = md5(htmlentities($_POST['mdp'], ENT_QUOTES));
            Register($pdo, $tablename, 'mail', , , $  )
            
            
            
            
            
            
            
            ?>
        </div>
        <button type="submit" class="login" name="register">Register</button>
    </form>
</div>
    <?php require_once('inc/footer.inc.php') ?>