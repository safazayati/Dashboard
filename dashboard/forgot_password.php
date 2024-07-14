<?php

session_start();



include('server.php')
       
 ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>CRMN | CENTRE DE RECHERCHE  EN MICROELECTRONIQUE ET NANOTECHNOLOGIE </title>
    <link rel="stylesheet" href="connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    .btn1{
    background: #000;
    width: 100%;
    height: 45px;
    outline: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background: #3244ed;
    font-size: 16px;
    color: #000;
    box-shadow: rgba(0,0,0,0.4);

    }
    .form-box .input-box{
    width: 480px;
    height: 50px;
    border-bottom: 2px solid #000;
    margin: 30px 0;
    position: relative;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    padding-right: 28px;


}
.input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    font-weight: 600px;
    pointer-events: none;
    transition: .5s ease;

}
.input-box .icon{
    position: absolute;
    top: 13px;
    right: 0;
    font-size: 19px;
}
.input-box input:focus~ label,
.input-box input:valid~ label{
    top: -5px;
}
.background{
    background: url(images/crmnbackground.jpg) no-repeat;
    background-position: center;
    background-size:cover ;
    height: 100vh;
    width: 100%;
    filter: blur(10px);
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 75%;
    height: 550px;
    margin-top: 20px;
    background: url(images/crmnbackground.jpg) no-repeat;
    background-position: center;
    background-size:cover ;
    border-radius: 20px;
    


}
    
</style>
</head>

<body>
    

  
    <!-- FORGET PASSWORD FORM CREATION -->
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
			
                <form action="forgot_password_process.php" method="post">
                    <h2>Récupérer votre mot de passe</h2>
                    <p>
                    Veuillez entrer votre adresse e-mail que vous avez utilisée pour vous connecter sur ce site
                     et nous vous aiderons à récupérer votre mot de passe.
                    </p>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email"  name="email" required>
                        <label >Email</label>
                    </div>
                    <button type="submit" class="btn1"  name="forgot-password-btn">Récupérer votre mot de passe</button>
                </form>
            </div>
    <script src="connexion.css"></script>
</body>
</html>