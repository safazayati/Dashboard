<?php 





include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CRMN | CENTRE DE RECHERCHE  EN MICROELECTRONIQUE ET NANOTECHNOLOGIE </title>
    <link rel="stylesheet" href="inscription.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
       <!-- NAVBAR CREATION -->
   <header class="header">
    <nav class="navbar">
      
          <a href="connexion.php">Connexion</a>
          
    </nav>
  
   </header>
  
    <!-- SIGNUP FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='sit'></i>CRMN</h2>
            <div class="text-item">
                <h2>Bienvenue!<br><span>
                    Sur notre Plateforme                </span></h2>
                <p>CENTRE DE RECHERCHE
                    EN MICROELECTRONIQUE ET NANOTECHNOLOGIE</p>
                <div class="social-icon">
                    <a href="https://www.facebook.com/CRMNTunisie/?locale=fr_FR"><i class='bx bxl-facebook'></i></a>
                    <a href="https://tn.linkedin.com/company/centre-de-recherche-en-micro%C3%A9lectronique-et-nanotechnologie-au-technop%C3%B4le-de-sousse"><i class='bx bxl-linkedin'></i></a>
                    

                </div>
            </div>
        </div>
        
        <div class="form-box register" >
            <form action="inscription.php" method="post" enctype="multipart/form-data">
			<?php include('errors.php') ;?>

             <h2>S'inscrire</h2>                   


<div class="input-box">
    
                    <span class="icon"><i class='bx bxs-user'></i></span>
                    <input type="text"  name="pseudo"  value="<?php echo $pseudo; ?>" required>
                    <label >Pseudo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="email"  value="<?php echo $email; ?>" required>
                    <label >Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="password" name="password" required>
                    <label>Mot de passe</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="password"  name="password_retype" required>
                    <label> Confirmation de Mot de passe</label>
                </div>
                <div>
                
                <label for="function-select">Vous êtes:</label>
                    <select name="user_type" id="function-select">
                                <option value="">--Veuillez choisir une option--</option>
                                 <option value="user">Utilisateur</option>
                                <option value="admin">Administrateur</option>
                    </select>
                
               
                <button type="submit" class="btn" name="reg_user">s'inscrire</button>
                <div class="create-account">
                    <p>Vous avez un compte? <a href="connexion.php" class="login-link">S'identifier</p>
                </div>
            </form>
            </form>
        </div>
    </div>
</div>

    </body>
</html>
