<link rel="stylesheet" href="additional-css/site.css">
<?php require_once("include/header.inc.php"); ?>
<div id="page">

<h1 class="display-1 bienvenue"> Bienvenue <?php echo ($_SESSION['username']) ?> </h1>
<h4 class="display-6 sub">Délecte toi de ce contenu exceptionnel </h2>
</div>
<div class="affichage">
<?php 
$affichage = $pdo->query("SELECT * FROM joke");
$fetchaffi = $affichage->fetch(PDO::FETCH_OBJ);
var_dump($fetchaffi)

 







?>
</div>
<?php require_once("include/footer.inc.php"); ?>