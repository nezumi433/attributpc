<?php include('../fonctions/connectBDD.php');
include('../fonctions/CRUD_Manager.php');
include('../fonctions/CLIENT_Manager.php');
include('../fonctions/admin_function.php');

$cnx = connexionBDD() ;

?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Attribution PC</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>



<body>


    <div class="container">

        <br />
        <?php include 'v_view/date_navig.php' ?>



        <table style=" display:inline-block;
  vertical-align:center;">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Ajouter Ordi
            </button>
            <?php
                if(isset($_GET['success'])){
                    $success = $_GET['success'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ajouté avec succès</p>";
                }
                ?>
            <?php include 'v_view/modal_insert_pc.php' ?>

        </table>








        <br />
        <div class="row" style="width: 50%;">
            <!--La classe bg-info ajoute un fond bleu à l'élément-->
            <div class="col bg-info">


           

                    <?php include('tables.php'); ?>
                

                
            </div>
        </div>

    </div>

</body>

<script src="assets/js/script.js"></script>


</html>
