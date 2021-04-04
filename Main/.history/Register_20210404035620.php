<?php require_once('inc/header.inc.php') ?>


    <form method="POST" action="#">
    <div class="formdisplay">
        <input type="email" class="champs" name="email" placeholder="email">
        <input type="text" class="champs" name="Username" placeholder="Username">
        <input type="password" class="champs" id="mdp" name="mdp" placeholder="Password">
</div>
        <div class="displayphp">

            <?php
            if (!empty($_POST['email']) && !empty($_POST['Username']) && !empty($_POST['mdp'])) {

                $tablename = 'utilisateur';
                $colname1 = 'email';
                $colname2 = 'username';
                $colname3 = 'mdp';
                $content1 = htmlentities($_POST['email'], ENT_QUOTES);
                $content2 = htmlentities($_POST['Username'], ENT_QUOTES);
                $content3 = md5(htmlentities($_POST['mdp'], ENT_QUOTES));
                Register($pdo, $tablename, $colname1, $colname2, $colname3, $content1, $content2, $content3);
            }







            ?>
        </div>
        <button type="submit" class="login" name="register">Register</button>
    </form>

<?php require_once('inc/footer.inc.php') ?>