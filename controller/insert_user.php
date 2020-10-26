<?php 

include('../fonctions/connectBDD.php');
include('../fonctions/CRUD_Manager.php');

$nomClient	= (isset($_POST['nomClient']	) ) ? $_POST['nomClient'] 	: '######' ;
$prenomClient	= (isset($_POST['prenomClient']	) ) ? $_POST['prenomClient'] 	: '######' ;

$cnx = connexionBDD();

if (isset($_POST['add_user'])) {
    

    CRUD_insert_user($cnx, $nomClient, $prenomClient);
    echo '<script type="text/javascript">window.alert("Client ajouté");</script>';

    
} else {
    
    echo '<script type="text/javascript">window.alert("KO");</script>';
}




?>