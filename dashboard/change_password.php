<?php


 
include('server.php');
include('change_password_process.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> CRMN | CENTRE DE RECHERCHE  EN MICROELECTRONIQUE ET NANOTECHNOLOGIE </title>
    <link rel="stylesheet" href="connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   </header>
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
        <div class="login-section">
            <div class="form-box login">
                <form action="" method="post">
                    <h2>Changer votre mot de passe</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email"  name="email" required>
                        <label >Email</label>
                    </div>
                    
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password_1" required>
                        <label>Nouveau mot de passe</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password_2" required>
                        <label> Confirmer nouveau mot de passe</label>
                    </div>
                   
                    <button type="submit" class="btn"  name="confirmer">Confirmer</button>
                   
                </form>
            </div>
        </div>
            <script src="index.js></script>
</body>
</html>