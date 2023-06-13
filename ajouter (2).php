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
//verifier bien que le boutton a bien ete cliqué
if(isset($_POST['button'])){
   //extraction des informations envoyé des variables par la methode POST
   extract(($_POST));
   //verifier que tous les champs ont été remplis
   if(isset($nom) && isset ($prenom)  && isset($date_de_naissance) && isset($sexe) && isset($ville_d_origine)){
   //connexion à la base de donnée
   include_once "connexion.php";
   //requete d'ajoute
   $req = mysqli_query($con , "INSERT INTO liste VALUES(NULL, '$nom','$prenom', '$date_de_naissance' , '$sexe' , '$ville_d_origine' ,'$formation')");
   if($req){//si la requete a ete effectuée avec succès ,on fait une redirection
    header("location: index.php");

   }else {//si non
    $message = "liste non ajouté";

   }
   }else {
    //si non
    $message = "veuillez remplir tous les champs !";
   }
}
?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png">Retour</a>
        <h2>Ajouter un apprenant</h2>
        <p class="erreur_message">
            <?php
            //si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            } 
            ?>
        </p>
        <form action="" method="post">
            <label>nom</label>
            <input type="text" name="nom" placeholder="nom">
            <label>prenom</label>
            <input type="text" name="prenom"  placeholder="prenom">
            <label>date_de_naissance</label>
            <input type="date" name="date_de_naissance"  placeholder="date_de_naissance">
            <label>sexe</label>
            <input type="text" name="sexe" placeholder="sexe">
            <label>ville_d_origine</label>
            <input type="text" name="ville_d_origine" placeholder="ville_d_origine">
            <label>formation</label>
            <input type="text" name="formation" placeholder="formation">
            <input type="submit" value="Ajouter" name="button">
            <a href="index.php" class="bTn_add" style="align-self:center; margin-top:20px; padding-right:148px;padding-left:148px">Annuler</a>
        </form>


    </div>
</body>
</html>