
<?php

 try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=testSimplon', 'root', '');
    }

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
   




$numUser = $_GET['number'];
 
$req = $bdd-> prepare("UPDATE utilisateurs SET nomUser = '".$_POST['user_nom']."',
                                               prenomUser = '".$_POST['user_prenom']."',
                                               mailUser = '".$_POST['user_email']."'
                                          
                                               WHERE numUser = '$numUser'");
 if(isset($_POST["update"])){ 
       
 $req->execute(array($_POST['user_nom'],
                     $_POST['user_prenom'],
                     $_POST['user_email'],
                     $numUser
                  ));
    
    header("Location: ../view/update_delete.php");
}
?>

