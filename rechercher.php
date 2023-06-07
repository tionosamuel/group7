<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<table>
            <tr id="items">
                <th>nom</th>
                <th>prenom</th>
                <th>date_de_naissance </th>
                <th>sexe</th>
                <th>ville_d_origine</th>
                <th>formation</th>
            </tr>
    <?php
    require_once 'connexion.php';
    //récupérer la recherche
    $recherche = isset($_POST['search']) ? $_POST['search'] : '';

    //la requête mysql
    $q = $con->query("SELECT * FROM liste WHERE nom like '%$recherche' or prenom like '%$recherche' or date_de_naissance like '%$recherche' or sexe like '%$recherche' or ville_d_origine like '%$recherche' or formation like '%$recherche' LIMIT 10");
    //affichage du résultat
    while($row = mysqli_fetch_array($q)){
        ?>
        <tr>
        <td><?=$row['nom']?></td>
        <td><?=$row['prenom']?></td>
        <td><?=$row['date_de_naissance']?></td>
        <td><?=$row['sexe']?></td>
        <td><?=$row['ville_d_origine']?></td>
        <td><?=$row['formation']?></td>
        
    </tr>
    <?php

    }
    ?>
</table>
</body>
</html>
