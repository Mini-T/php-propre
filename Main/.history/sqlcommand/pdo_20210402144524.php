<?php


try {
    $pdo = new PDO("mysql:host=localhost;dbname=Main", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}

function login($pdo, $b, $c)
{
    $query = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE username = '$b' AND mdp = '$c'");
    $query = $query->fetch(PDO::FETCH_ASSOC);
    // Final check
    if ($query['COUNT(*)'] > 0) {
        $_SESSION['username'] = $b;
        echo "done";
        echo $_SESSION['username'];
    } else {
        echo "combinaison incorrecte, bouffes tes morts";
?> <br><a href="./Register.php">Viens par là</a>
<?php
    }
}
function Register($pdo, $tablename, $colname1, $colname2, $colname3, $content1, $content2, $content3)
{
    $check = $pdo->query("SELECT id FROM utilisateur WHERE email = '$content1' ");
    $check = $check->fetch(PDO::FETCH_OBJ);
    var_dump($check);
    if($check == true){
        
    }

    // $insertquery = $pdo->exec("INSERT INTO $tablename($colname1, $colname2, $colname3) VALUES ('$content1', '$content2', '$content3')");
    // echo $insertquery;
}

?>