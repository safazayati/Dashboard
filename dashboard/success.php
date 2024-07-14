<?php

session_start();


include('server.php')
?>

<!DOCTYPE html>
<html lang="en">
<style>
    .success{
        text-align: center;
        font-size: 20px;
        line-height: 20;
        margin: 20px 0;
        transform: translateX(250px);
        transition-delay: 0s;
    }
</style> 
<head>
    <title>CRMN | CENTRE DE RECHERCHE  EN MICROELECTRONIQUE ET NANOTECHNOLOGIE </title>
    <link rel="stylesheet" href="connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='sit'></i>CRMN</h2>
            <div class="text-item">
                <h2>Bienvenue!<br><span>
                    Sur notre Site                </span></h2>
                <p>CENTRE DE RECHERCHE
                    EN MICROELECTRONIQUE ET NANOTECHNOLOGIE</p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                </div>
            </div>
        </div>
   
    <form action="connexion.php" method="post"></form>
        <div class="success">Le mot de passe a été modifié avec succès,
             connectez-vous <a href="connexion.php">ici</a></div>
</body>

</html>