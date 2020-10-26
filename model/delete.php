
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
 
$req = $bdd-> prepare("DELETE FROM utilisateurs WHERE numUser = '$numUser'");

 if(isset($_POST["delete"])){ 
       
 $req->execute(array(
                     $numUser
                  ));
    
header ("Location: ../view/update_delete.php");     
}
?>

