<!-- <?php
        // session_start();
        // if(!$_SESSION['mdp']){
        //     header('location:index.php');
        // }
        
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des apprenants</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter (2).php" class="Btn_add"> <img src="images/images.png">Ajouter</a>
        <form action="rechercher.php" method="POST">
            <input type="text" name="search" placeholder="rechercher un apprenant">
            <button type="submit">Rechercher</button>
            <a href="Administrateur.php" class="Btn_add">Déconnexion</a>
        </form>
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date_de_naissance</th>
                <th>Sexe</th>
                <th>ville_origine</th>
                <th>formation</th>
                <th>modifier</th>
                <th>supprimer</th>
            </tr>
            <?php
            //inclure la page de connexion
            include_once "connexion.php";
            //requête pour afficher la liste
            $req = mysqli_query($con, "SELECT * FROM liste");
            if (mysqli_num_rows($req) == 0) {
                //  il n'existe pas de liste dans la base de donnée , alors on affiche ce message :
                echo "il n'y a pas encore de liste a ajouter !";
            } else {
                //si non affichons la liste de tous la liste
                while ($row = mysqli_fetch_assoc($req)) {
            ?>
                    <tr>
                        <td><?= $row['nom'] ?></td>
                        <td><?= $row['prenom'] ?></td>
                        <td><?= $row['date_de_naissance'] ?></td>
                        <td><?= $row['sexe'] ?></td>
                        <td><?= $row['ville_d_origine'] ?></td>
                        <td><?= $row['formation'] ?></td>
                        <!--nous allons mettre l'id de chaque employé dans ce lien-->
                        <td><a href="modifier.php?id=<?= $row['id'] ?>" class="bTn_add"> modifier</a></td>
                        <td><a href="supprimer.php?id=<?= $row['id'] ?>" class="btn_add" onclick="return confirmDelete();"> supprimer</a></td>



                    </tr>
            <?php
                }
            }
            ?>
        </table>

    </div>

    <script>
        function confirmDelete() {
            return confirm("Êtes-vous sûr de vouloir supprimer cet élément ?");
        }
    </script>

    <script src="js.sj"></script>
</body>

</html>