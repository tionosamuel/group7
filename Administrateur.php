<?php
//Nous allons démarrer la session avant toute chose
session_start() ;
if(isset($_POST['boutton-valider'])){//si on clique sur le bouton alors:
//Nous allons vérifier les informations du formulaire
if(isset($_POST['email']) && isset($_POST['mote_de_passe'])){//on vérifie si l'utilisateur a rentré des informations
    //Nous allons mettre l'email et le mot de passe dans des variables
    $email = $_POST['email'] ;
    $mdp = $_POST['mote_de_passe'] ;
    $erreur = "" ;
   //Nous allons vérifier si les informations entrées sont correctes
   //Connexion à la base de donnée
   $nom_serveur = "localhost";
   $utilisateur = "root";
   $mot_de_passe = "3719";
   $nom_base_données = "apprenant";
   $con = mysqli_connect( $nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
//    $shashed_mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);
   //Requête pour sélectionner tous l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrés
   $req = mysqli_query($con , "SELECT * FROM logi WHERE email = '$email' AND mote_de_passe='$mdp' ") ;
   $num_ligne = mysqli_num_rows($req) ; //Compter le nombre de ligne ayant rapport à la requête SQL
   if($num_ligne > 0){
    header("Location: index.php");// Si le nombre de ligne est > 0 on sera redirigé vers la page bienvenu
    //Nous allons créer une variable de type session qui va contenir l'eamail de l'utilisateur
    $_SESSION['email'] = $email ;
    $_SESSION['mote_de_passe']=$mote_de_passe;
   }else{//si non
        $erreur = "IDENTIFIANTS INCORRECTS !";
   }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="styleS.css">
</head>
<body>
    <section class="section1">
        <h1>Connexion</h1>
        <?php
        if(isset($erreur)){//si la variable $erreur existe on affiche le contenu
            echo "<p class= 'Erreur'>".$erreur."</p>" ;
        }
        ?>
        <form class="form2" action="" method="POST"> <!--on ne met plus rien au niveau de l'action pour pouvoir envoyer les données dans la même page-->
            <label>Adresse mail</label>
            <input type="text" name="email" placeholder="Entrez votre email">
            <label>Mots de passe</label>
            <input type="password" name="mote_de_passe" placeholder="Entrez votre mot de passe">
            <input type="submit" value="Valider" name="boutton-valider">
            
        </form>
        <div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
</div>
    </section>
</body>
</html>