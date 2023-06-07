<?php
//connexion à la base de donnée
include_once "connexion.php";
 //recuperation de l'id dans le lien
$id= $_GET['id'];
//requete de supprrission
$req = mysqli_query($con , "DELETE FROM liste WHERE id = $id");
//redirection vers la page index.php
header("Location:index.php")
?>