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
    while ($fetchaffi = $affichage->fetch(PDO::FETCH_OBJ)) { ?>
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title"><?php echo $fetchaffi->utilisateur ?></h5>
                <h6 class="display-6" style="font-size: 15px;"><?php echo $fetchaffi->date?> </h6>
                <p class="card-text"><?php echo "?> $fetchaffi->content<?php"?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>



    <?php } ?>










</div>
<?php require_once("include/footer.inc.php"); ?>