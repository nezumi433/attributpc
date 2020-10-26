<?php
   
function CRUD_insert_pc($pdo, $nomOrdi) {			
	$sql= 'INSERT INTO ordis (nomOrdi) VALUES ( "'. $nomOrdi .'" );';
	return execBDD($pdo, $sql) ;
}

function CRUD_insert_user($pdo, $nomClient, $prenomClient) {			
	$sql= 'INSERT INTO clients (nom, prenom) VALUES ( "'. $nomClient .'",   "'. $prenomClient .'");';
	return execBDD($pdo, $sql) ;
}

function CRUD_insert_attribute($pdo, $date, $horaire, $idOrdi, $idClient) {			
	$sql= 'INSERT INTO attributionpc ( dateAttribution, horaire, idOrdi, idClient) VALUES ( "'. $date .'" ,  "'. $horaire .'" , "'. $idOrdi .'" ,"'. $idClient .'" );';
	return execBDD($pdo, $sql) ;
}

function CRUD_update($pdo, $login, $pwd, $nom, $typeU) {		
   /* $sql = "UPDATE users SET pwd = 'afpar' , nom = 'le big bosser', typeU = 'A' WHERE login = 'afpar@afpar.com';";*/
        
	$sql= 'UPDATE users SET pwd = "'. $pwd .'" WHERE login = "'. $login .'";';
	return execBDD($pdo, $sql) ;
}

function CRUD_delete_pc($pdo, $idOrdinateur){

	$sql='DELETE FROM ordis WHERE nomOrdi = "'.$idOrdinateur.'";';
	return execBDD($pdo, $sql);
}


function execBDD($pdo, $sql) {
	$rowCount = $pdo->exec($sql);
	return $rowCount;
}
?>
