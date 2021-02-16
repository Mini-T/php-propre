<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            width: 200px;
            margin: 10px 10px 10px 10px;
        }

        th {
            background-color: grey;
        }

        th,
        tr,
        td {
            border: solid thin black;
        }
    </style>
    <?php include("init.inc.php") ?>
</head>

<body>
    <?php
    $sql = "SELECT * FROM annuaire";
    $result = $connection->query($sql);
    $result->data_seek(0);
    if ($r = $connection->error) {
        echo "error" . $r;
    } else { ?>
        <table>
            <thead>
                <tr>
                    <th>ID : </th>
                    <th>Nom : </th>
                    <th>Prenom : </th>
                    <th>Telephone : </th>
                    <th>Profession : </th>
                    <th>Ville : </th>
                    <th>Code Postal : </th>
                    <th>Adresse : </th>
                    <th>Date de naissance : </th>
                    <th>sexe : </th>
                    <th>description : </th>
                </tr>
            </thead>
            <?php while ($ligne = $result->fetch_assoc()) { ?>
                <tr>
                    <td> <?php echo $ligne['id_annuaire'] ?></td>
                    <td> <?php echo $ligne['nom'] ?></td>
                    <td> <?php echo $ligne['prenom'] ?></td>
                    <td> <?php echo $ligne['telephone'] ?></td>
                    <td> <?php echo $ligne['profession'] ?></td>
                    <td> <?php echo $ligne['ville'] ?></td>
                    <td> <?php echo $ligne['codepostal'] ?></td>
                    <td> <?php echo $ligne['adresse'] ?></td>
                    <td> <?php echo $ligne['date_de_naissance'] ?></td>
                    <td> <?php echo $ligne['sexe'] ?></td>
                    <td> <?php echo $ligne['description'] ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php }
    $script = "SELECT COUNT(*) FROM annuaire WHERE sexe = 'f'";
    $nbf = $connection->query($script);
    $row = mysqli_fetch_array($nbf);


    if ($r = $connection->error) {
        echo "error" . $r;
    } else {;
    }
    ?> Nbr de femme : 
    <?php echo $row[0];
    ?><br>
    <?php
    $script = "SELECT COUNT(*) FROM annuaire WHERE sexe = 'm'";
    $nbh = $connection->query($script);
    $row = mysqli_fetch_array($nbh);
    ?> Nbr d'homme :
    <?php echo $row[0];
    ?>
    <br>
    <a href="ex 5.2.php">précédent exercice</a>
</body>