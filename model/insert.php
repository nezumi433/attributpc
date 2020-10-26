
<?php
 
if(isset($_POST["add_pc"])){
$hostname='localhost';
$username='root';
$password='';
  
try {
$dbh = new PDO("mysql:host=$hostname;dbname=crudpc;charset=utf8", $username,$password);
  
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$stmt = $dbh->prepare('INSERT INTO ordis(nomOrdi) VALUES(:nomOrdi)');

$stmt -> bindParam(':nomOrdi', $_POST["new_ordi"]);


 
$stmt->execute();
 
if ($dbh->query($stmt)) {
 header("Location: ../view/dashboard.php?success=1");
}
else{
 header("Location: ../view/create_user.php");
}
 
$dbh = null;
} 
    
    catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

    
}
 
?>

