<?php


try {
    $pdo = new PDO("mysql:host=localhost;dbname=Main", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}$
 $register = $pdo->exec("Insert into utilisateur(username, mdp) values('$a', '$b')");
        echo "done";
    function inserer($a, $b){
        $pdo->exec("Insert into utilisateur(username, mdp) values('$a', '$b')");
    }
    ?>