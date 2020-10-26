<?php

// On inclut la connexion à la base
require_once('model/connect.php');


require_once('model/close.php');
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Attribution PC</title>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>



<body>


    <div class="container">


        <center>
            <h1>CONNEXION</h1>
        </center>

        <form class="login-form" action="controller/acces_dashboard.php" method="post">
            <div class="form-group">
                <label for="pseudoAdmin">PSEUDO :</label>
                <input type="text" class="form-control" name="pseudoAdmin" id="pseudoAdmin" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="mdpAdmin">PASSWORD :</label>
                <input type="password" class="form-control" name="password" id="mdpAdmin">
            </div>

            <input type="submit" class="btn btn-primary" value="connexion" name="log">
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Nom utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>

    </div>

</body>

<script src="js/script.js"></script>

</html>
