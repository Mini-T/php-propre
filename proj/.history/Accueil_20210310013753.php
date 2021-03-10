<link rel="stylesheet" href="additional-css/site.css">
<?php require_once("include/header.inc.php"); ?>
<div id="page">

<h1 class="display-1 bienvenue"> Bienvenue <?php echo ($_SESSION['username']) ?> </h1>
<h4 class="display-6 sub">Délecte toi de ce contenu exceptionnel </h2>
</div>
<br>
<div class="affichage">
<?php 
$affichage = $pdo->query("SELECT * FROM joke");
while($fetchaffi = $affichage->fetch(PDO::FETCH_OBJ)){ ?>
<div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <h5 class="card-title"><?php echo $fetchaffi->utilisateur ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



<?php } ?>

 








</div>
<?php require_once("include/footer.inc.php"); ?>