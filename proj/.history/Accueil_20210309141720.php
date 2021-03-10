<link rel="stylesheet" href="additional-css/site.css">
<?php require_once("include/header.inc.php"); ?>
<div id="page">

<h1 class="display-1"> Bonjour <?php echo ($_SESSION['username']) ?> </h1>
<form id="writer" action="POST">
    <h1 class="display-4 post">Insère ta meilleure vanne</h1>
    <textarea name="joke" id="joke" cols="30" rows="10" placeholder="la meilleure vanne j'ai dis"></textarea>
    <button type="submit" class='btn btn-primary envoi'> Envoyer</button>
    <?php 
    InputCompletionCheck()
    
    
    
    
    
    
    ?>





</form>


</div>
<?php require_once("include/footer.inc.php"); ?>