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
<?php
  // Vérification si la suppression est demandée
  if(isset($_GET['id']) && $_GET['id'] == 'delete') {
    // Suppression de l'élément
    // ...
    // Redirection vers la page principale ou une autre page
    header('Location: index.php');
    exit;
  }
?>