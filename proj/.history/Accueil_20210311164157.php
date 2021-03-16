<?php require_once("include/header.inc.php") ?>
<div id="page">

    <h1 class="display-1 bienvenue"> Bienvenue <?php if (isset($_SESSION['username'])) {
                                                    echo $_SESSION['username'] ?> </h1><br>
<?php } else {
                                                    echo "random grosse merde";
                                                } ?>
<h4 class="display-6 sub">Délecte toi de ce contenu exceptionnel </h2>
</div>
<br>
<div class="affichage">
    <?php
    $affichage = $pdo->query("SELECT * FROM joke");
    while ($fetchaffi = $affichage->fetch(PDO::FETCH_OBJ)) { ?>
        <div class="card out" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title"><?php echo $fetchaffi->utilisateur ?></h5>
                <h6 class="display-6" style="font-size: 15px;"><?php echo $fetchaffi->date, " ", $fetchaffi->heure ?> </h6>
                <p class="card-text"><?php echo $fetchaffi->content ?></p>

                <form action="#" method="POST">
                    <button id="upvote" type="submit" value=1 name="upvote">up</button>
                </form>
                <?php if ($fetchaffi->utilisateur = $_SESSION['username']) { ?>
                    <form action="#" method="POST">
                        <button type="submit" class="btn btn-primary red" name="delete" value=1>Supprimer</button>
                    </form>
            <?php }
                
            } ?>
            <?php 
            if (!empty($_POST['delete'])) {
                    var_dump($_POST['delete']);
                    exit();
                    $delete = $pdo->exec("DELETE from joke where id = $fetchaffi->id");
                }
            if (!empty($_POST['upvote'])) {

                $upvoteplusun = (int)$_POST['upvote'];

                $queryupvote = $pdo->exec("UPDATE joke SET upvote = upvote + 1 WHERE id = $fetchaffi->id");
            } ?>
            </div>
        </div>














</div>
<?php require_once("include/footer.inc.php"); ?>