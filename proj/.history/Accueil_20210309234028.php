<link rel="stylesheet" href="additional-css/site.css">
<?php require_once("include/header.inc.php"); ?>
<div id="page">

<h1 class="display-1"> Bonjour <?php echo ($_SESSION['username']) ?> </h1>
<form id="writer" method="post" action="#">
    <h1 class="display-4 post">Insère ta meilleure vanne</h1>
    <textarea name="joke" id="joke" cols="30" rows="10" placeholder="la meilleure vanne j'ai dis"></textarea>
    <input type="submit" class="btn btn-primary " >
    





</form>
<?php 

    var_dump($_SESSION);
    $date = date('h:i:s A', time());
    echo $date;
    if(!empty($_POST)){
        $user = $_SESSION['username'];
        $postcontent = $_POST['joke'];
        $jkpost = $pdo->query("INSERT INTO joke(utilisateur, content, jokedate) VALUES('$user', '$postcontent', '$date')");


        
    }
    ?>

</div>
<?php require_once("include/footer.inc.php"); ?>