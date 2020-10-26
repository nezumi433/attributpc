<?php 

include('../fonctions/connectBDD.php');
include('../fonctions/CRUD_Manager.php');


$nomOrdi	= (isset($_POST['new_ordi']	) ) ? $_POST['new_ordi'] 	: '######' ;

$cnx = connexionBDD();

if (isset($_POST['add_pc'])) {
    

    CRUD_insert_pc($cnx, $nomOrdi);
    
    echo '<script type="text/javascript">window.alert("ok");</script>';

    
} else {
    
    echo '<script type="text/javascript">window.alert("KO");</script>';
}




?>