<?php
   
function CLIENT_getInfos_user($pdo) {
    $sql= 'SELECT PRENOM FROM clients';
    return lireLignesBDD($pdo, $sql) ;
}

function CLIENT_getId_user($pdo, $prenom) {
    $sql= 'SELECT idClient FROM clients WHERE prenom = "'.$prenom.'"' ;
    return lireLignesBDD($pdo, $sql) ;
}


?>