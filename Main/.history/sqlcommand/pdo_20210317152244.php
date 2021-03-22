<?php 
include('functionsql.php');

try {
    $pdo = new PDO("mysql:host=localhost;dbname=Main", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
 ?>
 <?php
function insert($a, $b){
$pdo->exec("Insert into Main(username, mdp) values('$a', '$b')");
}
?>