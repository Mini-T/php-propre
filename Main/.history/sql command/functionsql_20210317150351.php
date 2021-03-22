<?php function insert($a, $b){
    $pdo->exec("Insert into Main(username, mdp) values('$a', '$b')")
}