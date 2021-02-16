<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            width: 500px;
            margin: 7px 7px 7px 7px;
            background: rgb(15, 15, 15);
            color: whitesmoke;
            border-radius: 10px;
        }

        ul {
            background-color: grey;
            font-size: 15px;
            list-style: none;
            width: 300px;
            border: solid 2px black;
            line-height: 100%;
            text-align: left;
            padding: 20px;
            color: greenyellow;
        }
        li{
            padding: 15px;
        }
        li:hover{
            transition-duration: 300ms;
            padding: 15px 30px 15px;
            background: linear-gradient(to right, rgb(40, 40 , 40), rgb(30, 30, 30 ))
            

        }
        #envoyer:hover{
            transition-duration: 500ms;
            background: linear-gradient(to top, white, rgb(15, 15, 15));

        }
        
        #fond {
            background: rgb(30, 30, 30);
            padding: 0px 15px 0px 0px;
            border: solid thin grey;
        }
        form{
            background-color: rgb(65, 65, 65);
            color: whitesmoke;
            width: 30%;
            text-align: center;
        }
    </style>
    <?php include("init.inc.php") ?>
</head>

<body>


    <form method="POST" action="">
        Nom :
        <br>
        <input type="text" name="nom" id="nom">
        <br>
        Prénom :
        <br>
        <input type="text" name="prenom" id="prenom">
        <br>
        Téléphone :
        <br>
        <input type="text" name="telephone" id="telephone">
        <br>
        Profession :
        <br>
        <input type="text" name="profession" id="profession">
        <br>
        Ville :
        <br>
        <input type="text" name="ville" id="ville">
        <br>
        Code Postal :
        <br>
        <input type="number" name="codepostal" id="codepostal">
        <br>
        Adresse :
        <br>
        <input type="text" name="adresse" id="adresse">
        <br>
        Date de naissance :
        <br>
        <input type="date" name="date_de_naissance" id="date_de_naissance">
        <br>
        Sexe : Femme

        <input type="radio" name="sexe" id="sexe" value='f'>

        Homme

        <input type="radio" name="sexe" id="sexe" value='m'>
        <br>
        Description :
        <br>
        <input type="text" name="description" id="description" style="height: 125px; width: 500px">
        <br>
        <input type="submit" name="envoyer" id="envoyer" value="Enregistrement">
    </form>
    <ul>
        <div id="fond">
            <li> Nom : <?php if (!empty($_POST)) {
                            echo addslashes($_POST['nom']);  ?></li><br>
            <li> Prenom : <?php echo addslashes($_POST['prenom']) ?></li><br>
            <li> Téléphone : <?php echo addslashes($_POST['telephone']) ?></li><br>
            <li> Profession : <?php echo addslashes($_POST['profession']) ?></li><br>
            <li> Ville : <?php echo addslashes($_POST['ville']) ?></li><br>
            <li> Code Postal : <?php echo addslashes($_POST['codepostal']) ?></li><br>
            <li> Adresse : <?php echo addslashes($_POST['adresse']) ?></li><br>
            <li> Date de naissance : <?php echo addslashes($_POST['date_de_naissance']) ?></li><br>
            <li> Sexe : <?php echo addslashes($_POST['sexe']) ?></li><br>
            <li> Description : <?php echo addslashes($_POST['description']);
                            } ?></li>
        </div>
    </ul>
    <?php
    var_dump($_POST['sexe']);
    if (!empty($_POST)) {
        $sql = "INSERT
         INTO 
         annuaire(nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description)
        VALUES 
        ('" . addslashes($_POST['nom']) . "' ,
        '" . addslashes($_POST['prenom']) . "',
        '" . addslashes($_POST['telephone']) . "',
        '" . addslashes($_POST['profession']) . "',
        '" . addslashes($_POST['ville']) . "',
        '" . addslashes($_POST['codepostal']) . "',
        '" . addslashes($_POST['adresse']) . "',
        '" . addslashes($_POST['date_de_naissance']) . "' ,
        '" . addslashes($_POST['sexe']) . "' ,
        '" . addslashes($_POST['description']) . "')";
        $result = $connection->query($sql);
        var_dump($result);
        if ($result === true) {
            echo "saved";
        } else {
            echo "error :" . $sql . "<br>" . $connection->error;
        }
    } else {
        echo "no data";
    } ?>
    <br>
    <a href="affichage_annuaire.php">Tableau (5.4)</a>

</body>

</html>