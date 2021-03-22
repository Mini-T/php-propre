<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./main.css">

    <?php 
    require_once('Main\sqlcommand\pdo.php');
    if (!isset($_SESSION)){
        session_start();


    } ?>
</head>

<body>
    <nav class="navbar">
        <ul id="listnav">
            <li><a href="#">page 1</a></li>
            <li><a href="#">page 2</a></li>
            <li><a href="#">page 3</a></li>
            <li><a href="#">page 4</a></li>
            <li><a href="#">page 5</a></li>
        </ul>
        <div class="right">
            <form id="login" action="login.php" method="POST">
                <input type="submit" name="loginbtn" id="loginbtn" value="login" >
            </form>
        </div>
    </nav>
    <div class="main">
   