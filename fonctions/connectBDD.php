<?php

function connexionBDD() {
	$SERVEUR = 	'localhost';
	$NOMBDD = 	'crudpc';
	$LOGIN =	'root';
	$PASSW =	'' ;
	
	try {
		$strConnection = 'mysql:host=' . $SERVEUR .';dbname=' . $NOMBDD ; 	
		$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
		$pdo = new PDO($strConnection, $LOGIN , $PASSW, $arrExtraParam); 
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		return $pdo ;
	}
	catch(PDOException $e) {
		$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
		die($msg);
		return false ;			// ne sexecute pas !
	}
}
?>
 