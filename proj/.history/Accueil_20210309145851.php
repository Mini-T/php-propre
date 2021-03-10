<link rel="stylesheet" href="additional-css/site.css">
<?php require_once("include/header.inc.php"); ?>
<div id="page">

<h1 class="display-1"> Bonjour <?php echo ($_SESSION['username']) ?> </h1>
<form id="writer" method="post" action="#">
    <h1 class="display-4 post">Insère ta meilleure vanne</h1>
    <textarea name="joke" id="joke" cols="30" rows="10" placeholder="la meilleure vanne j'ai dis"></textarea>
    <input type="submit" class="btn btn-primary" >
    





</form>
<?php 
    if(!empty($_POST)){
        
        echo $pdo
    }
    ?>

</div>
<?php require_once("include/footer.inc.php"); ?>