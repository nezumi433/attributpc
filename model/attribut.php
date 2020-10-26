
<?php

 try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=testSimplon', 'root', '');
    }

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
   



$numOrdi = $_POST['pc'];


//$req = $bdd-> prepare("UPDATE ordinateurs SET attribution = '".$_POST['user']."'
                                          
                                              // WHERE numOrdi = '$numOrdi'");
 if(isset($_POST['udpate_pc'])){


     
     echo $numOrdi;

 }
?>

