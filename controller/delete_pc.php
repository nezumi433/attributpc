<?php 

include('../fonctions/connectBDD.php');
include('../fonctions/admin_function.php');
include('../fonctions/CRUD_Manager.php');

$idOrdinateur = $_GET['idOrdinateur'];

$cnx = connexionBDD();



if (isset($_POST['oui'])) {
    

    CRUD_delete_pc($cnx, $idOrdinateur);
    echo '<script type="text/javascript">window.alert("Ordinateur suppprimé");</script>';
    
} else {
    
    echo '<script type="text/javascript">window.alert("KO");</script>';
}




?>