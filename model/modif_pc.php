
<?php

 try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=testSimplon', 'root', '');
    }

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
   




$numOrdi = $_GET['number'];
 
$req = $bdd-> prepare("UPDATE ordinateurs SET commentaires = '".$_POST['ordi_com']."'
                                          
                                               WHERE numOrdi = '$numOrdi'");
 if(isset($_POST["update_pc"])){ 
       
 $req->execute(array($_POST['ordi_com'],
               
                     $numOrdi
                  ));
    
    header("Location: ../view/fiche_pc.php?number=$numOrdi");
}
?>

