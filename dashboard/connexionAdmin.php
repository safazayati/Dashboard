<?php

session_start();


include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRMN | CENTRE DE RECHERCHE  EN MICROELECTRONIQUE ET NANOTECHNOLOGIE </title>
    <link rel="stylesheet" href="connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
       <!-- NAVBAR CREATION -->
       <header class="header">
    <nav class="navbar">
        
          <a href="inscription.php">Inscription</a>
          
    </nav>
  
   </header>

  
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='sit'></i>CRMN</h2>
            
            <div class="text-item">
                <h2>Bienvenue!<br><span>
                    Sur notre Plateforme               </span></h2>
                <p>CENTRE DE RECHERCHE
                    EN MICROELECTRONIQUE ET NANOTECHNOLOGIE</p>
                <div class="social-icon">
                    <a href="https://www.facebook.com/CRMNTunisie/?locale=fr_FR"><i class='bx bxl-facebook'></i></a>
                    <a href="https://tn.linkedin.com/company/centre-de-recherche-en-micro%C3%A9lectronique-et-nanotechnologie-au-technop%C3%B4le-de-sousse"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            
            <div class="form-box login">
			
                <form action="connexionAdmin.php" method="post">
                    <h2>s'identifier</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email"  name="email" required>
                        <label >Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password" required>
                        <label>Mot de passe</label>
                    </div>
                    <label for="function-select">Vous êtes:</label>
                    <select name="user_type" id="function-select">
                                <option value="">--Veuillez choisir une option--</option>
                                 <option value="user">Administrateur</option>
                                
                    </select>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Souviens de moi</label>
                        
                    </div>
                    
                    <button type="submit" class="btn"  name="login_admin">Se connecter</button>
                    <div class="create-account">
                        <p>vous n'avez pas de compte? <a href="inscription.php"register-link">S'inscrire</a></p>
                    </div>
                    <div class="forget-password">
                        <p>Mot de passe oublié? <a href="forgot_password.php">Réinitialisez</a></p>
                    </div>
                </form>
            </div>
    <script src="connexion.js"></script>
</body>
</html>