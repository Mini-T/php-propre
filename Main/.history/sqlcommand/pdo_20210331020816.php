<?php


try {
    $pdo = new PDO("mysql:host=localhost;dbname=Main", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
    function inserer($pdo, $a, $b){
        $pdo->exec("Insert into utilisateur(username, mdp) values('$a', '$b')");
        
    }
    function login($a, $b, $c){
        $query = $a->query("SELECT COUNT(*) FROM utilisateur WHERE username = '$b' AND mdp = '$c'");
         = $query->fetch(PDO::FETCH_ASSOC);

        
        }
    function test(){
        $test = 1;
        echo $test;
    }
    ?>