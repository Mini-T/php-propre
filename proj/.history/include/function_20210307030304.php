<?php 
function InputCompletionCheck($a, $b, $c, $a1, $b1, $c1) {
   if (empty($a)) {
    $a1 = 'adresse email';
    echo "veuillez rentrer votre $a1";
    
} elseif (empty($b)) {
    $b1 = "Nom d'utilisateur";
    echo "veuillez rentrer votre $b1 ça sert des fois";
    
} elseif (empty($c)) {
    $c1 = "mot de passe";
    echo "veuillez définir votre $c1 c'est important en vrai";
    
}
} ?>