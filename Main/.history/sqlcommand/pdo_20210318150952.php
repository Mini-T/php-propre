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
        $query = $a->query("SELECT count(*) from utilisateur where username = '$b' AND mdp = '$c'");
        $d = $query->fetch(PDO::FETCH_OBJ);
        var_dump($d);
    }
    ?>