<?php 

include('../fonctions/connectBDD.php');
include('../fonctions/admin_function.php');
include('../fonctions/CRUD_Manager.php');
include('../fonctions/CLIENT_Manager.php');

$day_date	= (isset($_POST['day_date']	) ) ? $_POST['day_date'] 	: '######' ;
$attr_horaire	= (isset($_POST['attr_horaire']	) ) ? $_POST['attr_horaire'] 	: '######' ;
$idOrdinateur	= (isset($_GET['idOrdi']	) ) ? $_POST['idOrdi'] 	: '######' ;
$prenom	= (isset($_GET['attr_user']	) ) ? $_POST['attr_user'] 	: '######' ;



$cnx = connexionBDD();


$idClie = CLIENT_getId_user($cnx, $prenom);
$idClient = next($idClie);


if (isset($_POST['attribute'])) {
    

   CRUD_insert_attribute($cnx, $day_date, $attr_horaire, $idOrdinateur, $idClient);
    echo '<script type="text/javascript">window.alert("Ordinateur attibué");</script>';

    
} else {
    
    echo '<script type="text/javascript">window.alert("KO");</script>';
}




?>