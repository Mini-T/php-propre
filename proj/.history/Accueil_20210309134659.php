<?php require_once("include/header.inc.php"); ?>
<div id="page">

<h1 class="display-1"> Bonjour <?php echo ($_SESSION['username']) ?> </h1>
<form action="POST">
    <h1 class="display-4 post">Insère ta meilleure vanne</h1>
    <textarea name="joke" id="joke" cols="30" rows="10" placeholder=""></textarea>






</form>


</div>
<?php require_once("include/footer.inc.php"); ?>