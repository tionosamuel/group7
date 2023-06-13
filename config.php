<?php
//nous allons verifié les informations du formulaire 
if(isset ($_POST['email']) && isset($_POST['email'])) { //on verifie si l'utilisateur a rentreré des information
    echo "Bienvenu" ; //si oui afficher bien Bienvenue
}else{
    echo "veuillez renter vos indentifiants";

}

?>