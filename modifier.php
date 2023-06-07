<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//connexion à la base de donnée
include_once "connexion.php";
//on recupère le id dans le lien 
$id = $_GET['id'];
//requete pour afficher les infos d'une liste
$req = mysqli_query($con,"SELECT * FROM liste WHERE id = $id");
$row = mysqli_fetch_assoc($req);
//verifier bien que le boutton a bien ete cliqué
if(isset($_POST['button'])){
   //extraction des informations envoyé des variables par la methode POST
   extract($_POST);
   //verifier que tous les champs ont été remplis
   if(isset($nom) && isset ($prenom)  && isset($date_de_naissance) && isset($sexe) && isset($ville_d_origine) && isset ($formation)){
     //requête de modification
     $req = mysqli_query($con , "UPDATE liste SET nom = '$nom' , prenom = '$prenom' ,date_de_naissance = '$date_de_naissance' , sexe = '$sexe' , ville_d_origine = '$ville_d_origine' , formation = '$formation' WHERE id = $id");
   if($req){//si la requete a ete effectuée avec succès ,on fait une redirection
    header("location: index.php");

   }else {//si non
    $message = "liste non modifier";

   }
   }else {
    //si non
    $message = "veuillez remplir tous les champs !";
   }
}
?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png">Retour</a>
        <h2>modifier un apprenant : <?=$row['nom']?> </h2>
        <p class="erreur_message">
            <?php
            if(isset($message)){ 
                echo $message;
            }
            ?>
         
        </p>
        <form action="" method="post">
            <label>nom</label>
            <input type="text" name="nom" value="<?=$row['nom']?>">
            <label>prenom</label>
            <input type="text" name="prenom" value="<?=$row['prenom']?>">
            <label>date_de_naissance</label>
            <input type="number" name="date_de_naissance" value="<?=$row['date_de_naissance']?>">
            <label>sexe</label>
            <input type="text" name="sexe" value="<?=$row['sexe']?>">
            <label>ville_d_origine</label>
            <input type="text" name="ville_d_origine" value="<?=$row['ville_d_origine']?>">
            <label>formation</label>
            <input type="text" name="formation" value="<?=$row['formation']?>">
            <input type="submit" value="modifier" name="button">
            <a href="index.php" class="bTn_add" style="align-self:center; margin-top:20px; padding-right:148px;padding-left:148px">Annuler</a>
        </form>
    </div>
</body>
</html> 
