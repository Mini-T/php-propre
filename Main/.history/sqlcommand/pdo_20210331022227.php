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
    function login($pdo, $b, $c){
        // match verification
        $query = $pdo->query("SELECT COUNT(*) FROM utilisateurs WHERE username = '$b' AND mdp = '$c'");
        $query = $query->fetch(PDO::FETCH_ASSOC);
        // Final check
        if($query == true){
            $_SESSION['username'] = $b ;
            echo "done";
            echo $_SESSION['username'];
            test();
            exit();
            header('Location:index.php');}

        
        }
    function test(){
        $test = 1;
        echo $test;
    }
    ?>