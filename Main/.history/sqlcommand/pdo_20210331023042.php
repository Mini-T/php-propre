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
        $postuser = $_POST['username'];
        $b = htmlentities($postuser, ENT_QUOTES);
        $postmdp = $_POST['password'];
        //encrypting
        $c = md5($postmdp);
        // match verification
        $query = $pdo->query("SELECT COUNT(*) FROM utilisateurs WHERE username = '$b' AND mdp = '$c'");
        $query = $query->fetch(PDO::FETCH_ASSOC);
        echo $query['COUNT(*)'];
        // Final check
        if($query['COUNT(*)'] != 0){
            $_SESSION['username'] = $b ;
            echo "done";
            echo $_SESSION['username'];
            exit();
            header('Location:index.php');}
        } else {
            echo "combinaison incorrecte, bouffes tes morts"
        }
    function test(){
        $test = 1;
        echo $test;
    }
    ?>