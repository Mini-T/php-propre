<?php function InputCompletionCheck($a, $b, $c, $a1, $b1, $c1){
   if (empty($a)) {
    $postmail = 'adresse email';
    echo "veuillez rentrer votre $a1"
    ;
} elseif (empty($b)) {
    $postign = "Nom d'utilisateur";
    echo "veuillez rentrer votre $b1 ça sert des fois"
    ;
} elseif (empty($c)) {
    $postmdp = "mot de passe";
    echo "veuillez définir votre $c1 c'est important en vrai"
    ;
}