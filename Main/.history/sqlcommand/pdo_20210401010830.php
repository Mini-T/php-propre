<?php


try {
    $pdo = new PDO("mysql:host=localhost;dbname=Main", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
    
    function login($pdo, $b, $c){
        $query = $pdo->query("SELECT COUNT(*) FROM utilisateurs WHERE username = '$b' AND mdp = '$c'");
        $query = $query->fetch(PDO::FETCH_ASSOC);
        // Final check
        if($query['COUNT(*)'] > 0){
            $_SESSION['username'] = $b ;
            echo "done";
            echo $_SESSION['username'];
        } else {    
            echo "combinaison incorrecte, bouffes tes morts";
            ?> <br><a href="./Register.php">Viens par là</a>
            <?php
        }
        }  
        function Register($mail)
    
    ?>