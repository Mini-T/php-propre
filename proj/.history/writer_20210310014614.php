<form id="writer" method="post" action="#">
    <h1 class="display-4 post">Insère ta meilleure vanne</h1>
    <textarea name="joke" id="joke" cols="30" rows="10" placeholder="la meilleure vanne j'ai dis"></textarea>
    <input type="submit" class="btn btn-primary " >
</form>
<?php 

    var_dump($_SESSION);
    $date = date('d/m/y', time());
    $heure = date('h:i:s A', time());
    echo $date;
    if(!empty($_POST)){
        try {
            $user = $_SESSION['username'];
            $safeuser = htmlentities($user, ENT_QUOTES);
            $postcontent = $_POST['joke'];
            $safecontent = htmlentities($postcontent, ENT_QUOTES);
            $jkpost = $pdo->exec("INSERT INTO joke(utilisateur, content, date, heure, upvote) VALUES('$user', '$postcontent', '$date',  0)");
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>