
<?php include('pdo.php');
 function insert($a, $b){
    $insertinto = $pdo->exec("Insert into Main(username, mdp) values('$a', '$b')");
}