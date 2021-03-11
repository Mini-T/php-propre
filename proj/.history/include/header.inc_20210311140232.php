<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vendors/js/bootstrap.js"></script>
    <link rel="stylesheet" href="vendors/css/bootstrap.css">
    <link rel="stylesheet" href="additional-css/FormRegister.css">


    <?php
    require_once 'init/pdo.init.php';
    require_once 'function.php';
    if(isset($_COOKIE['PHPSESSID'])){
        session_start();
    } else {

        
        if (isset($_COOKIE['stillconnect'])) {
            if (!isset($_SESSION)) {
                session_start();
                $_SESSION['username'] = $_COOKIE['stillconnect'];
                $thatuser = $_SESSION['username'];
                setcookie('stillconnect', $thatuser, time() + 31536000);
            }
        } 
    }
    
    ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <?php if (isset($_SESSION['username'])) { ?>
                    <h6 id="navign"> <?php echo $_SESSION['username'] ?></h6>
                <?php } else{ ?>
                    <h6 id="navign"> <?php echo 'Random grosse merde' ?></h6>
               <?php } ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>


                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    
                </form>
                <?php if (isset($_SESSION['username'])) { ?>
                    <form action="#" method="POST">
                        <button class="btn btn-primary Logout" value = 1 type="submit" name="Logout"><a id="logout" style="text-decoration: none; color:white;" href="./Logout.php" >Logout</a></button>
                        </form>
                        <?php } else { ?>
                        <form action="/proj/FormLogin.php" method="post">
                            <input type="submit" value="Login" class="btn btn-primary Login" name="Login" /></form>
                    <?php } ?>
                            
                        
            </div>
        </div>
    </nav>
    <div class="main">