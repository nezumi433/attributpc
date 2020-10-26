<?php
function USERS_existe($pdo, $login, $passw) {
    $req = $pdo->prepare("SELECT * FROM utilisateurs WHERE idUtilisateur = :login AND password = :pwd");
    $req->bindParam(':login', $login);
    $req->bindParam(':pwd', $passw);
    $req->execute();
    $arr = $req->fetchAll();
    $resultat = count($arr);
    if ($resultat == 0) {
    return false;
    } else {
    return true;
        
    }
}

function nbLignesBDD($pdo, $sql) {
    $arr = $pdo->query($sql)->fetchAll();
    return count($arr);
}

function lirelignesBDD($pdo, $sql) {
    $arr = $pdo->query($sql)->fetchAll();
    return $arr;
}
function lireligneBDD($pdo, $sql) {
    $arr = $pdo->query($sql)->fetchAll();       // array 2D
    if (count($arr) == 0) {
        $retour = false;
    } else {
        $retour = $arr[0] ;     // attention, 1er enreg si plusieurs !
    };
    return $retour;
}

function Ordi_getInfos($pdo) {
    $sql= 'SELECT nomOrdi FROM ordis';
    return lireLignesBDD($pdo, $sql) ;
}

function Ordi_getId($pdo) {
    $sql= 'SELECT idOrdi FROM ordis';
    return lireLigneBDD($pdo, $sql) ;
}


?>