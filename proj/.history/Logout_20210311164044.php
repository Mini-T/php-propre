<?php session_start();

$_SESSION=array();

session_destroy();
setcookie('stillconnect', null, time() - 3600)
setcookie()

header('location:FormLogin.php')             
?>