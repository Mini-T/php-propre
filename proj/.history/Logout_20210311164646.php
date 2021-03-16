<?php session_start();

$_SESSION=array();

session_destroy();
setcookie('stillconnect', null, time() - 3600);

header('location:FormLogin.php')             
?>