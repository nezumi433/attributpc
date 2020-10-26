<?php

$msgErr = "";
$nom = "";

include('../fonctions/connectBDD.php');
include('../fonctions/admin_function.php');

$f_login 	= (isset($_POST['pseudoAdmin']	) ) ? $_POST['pseudoAdmin'] 	: '######' ;
$f_pwd 		= (isset($_POST['password']	   ) ) ? $_POST['password'] 		: '######' ;

$msgErr = "";
$cnx = connexionBDD() ;




if (isset($_POST['log']) && USERS_existe($cnx, $f_login, $f_pwd)) {
    


    header ('location: ../view/dashboard.php');
    

} else {
    
    header ('location: ../index.php?erreur=1');
 
}
    




?>