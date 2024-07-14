<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation d'une salle</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
<style>
   

.info-container{
    position: absolute;
    max-width: 700px;
    width: 100%;
    border-radius: 10px;
    padding: 40px;
    margin: 50px 0;
    transform: translateX(90px);
    background-color: #fff;
    box-shadow: 0 15px 20px rgba(0,0,0,0.5);
}
.info-container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #98c9ff;
}
.info-container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 4px;
    width: 80px;
    border-radius: 8px;
    background-color: #98c9ff;
}
.info-container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    
    overflow: hidden;
}
.info-container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.info-container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.info-container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color:  #3244ed;
    
}
.info-container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    
    

}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #98c9ff;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
    color: #000;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
    color: #000;
    
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #98c9ff;
    
    

    
}

.input-field input :focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
    color: #6D6D6D;
}

.input-field input[type="date"]{
    color: #6D6D6D;
}
.input-field input[type="date"]:valid{
    color: #6D6D6D;
}
.info-container .actionBtn2 button{
    padding: 10px 30px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-size: 1em;
    font-weight: 500;
    background: #87CEFA;
    color: #fff;
    text-align: center;
    margin: 20px;
    cursor: pointer;
    background: #87CEFA;

}
</style>




</head>
<body> 
    <div class="container">
        <aside>
            <div class="top"> 
                <div class="logo">
                    <img src="./images/logo crmn.png">
                    <h2>CR<span class="danger">MN</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="espaceUser.php">
                    <span class="material-icons-sharp">account_circle</span>
                    <h3>Mon espace</h3>
                </a>
                <a href="usertableau.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Tableau de bord</h3>
                </a>
                <!---------  <a href="documentsUser.php" >
                    <span class="material-icons-sharp">folder_open</span>
                    <h3>Documents</h3>
                </a>     ------------>              
                <a href="conges_abs_user.php">
                    <span class="material-icons-sharp">holiday_village</span>
                    <h3>Congés et Absences</h3>
                </a>
                <a href="calendrierUser.php">
                    <span class="material-icons-sharp">today</span>
                    <h3>Calendrier</h3>
                </a>
                <a href="disponibiliteUser.php">
                    <span class="material-icons-sharp">meeting_room</span>
                    <h3>Disponibilité des salles</h3>
                </a>
                  <!--------- <a href="ordonnancementUser.php">
                    <span class="material-icons-sharp">assignment</span>
                    <h3>Ordonnancement</h3>
                </a>------------>
                <a href="autoparkUser.php">
                   <span class="material-icons-sharp">
                       local_parking
                       </span>
                   <h3>Auto-park</h3>
               </a>
              
        
                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        <!---------END OF ASIDE------------>
        <main>
            <h1>Réservation d'une salle</h1>
                <div class="info-container">
                
                <form action="resconfig.php" method="post">
                
                    <div class="form first">
                        <div class="details reservation">
                            <span class="title">Détails réservation</span>
        
                            <div class="fields">
                            <div class="input-field">
                                    <label>Nom et Prénom</label>
                                    <input type="text" name="nom" placeholder="Entrer Votre nom">
                                </div>
                                <div class="input-field">
                                    <label>Nom de département</label>
                                    <input type="text" name="nom_depart" placeholder="Entrer le nom de département">
                                </div>
                                <div class="input-field">
                                    <label>Nom de salle</label>
                                    <input type="text" name="nom_salle" placeholder="Entrer le nom de salle">
                                </div>

        
                                <div class="input-field">
                                    <label>Date réservation </label>
                                    <input type="date" name="date_res" placeholder="">
                                </div>
        
                                <div class="input-field">
                                    <label>De</label>
                                    <input type="time"   name="heure_debut" placeholder="" >
                                </div>
        
                                <div class="input-field">
                                    <label>Jusqu'à</label>
                                    <input type="time" name="heure_fin" placeholder="" >
                                </div>
                            </div>
                        </div> 

                        <div class="actionBtn2" >
                            <button name="confirmer">Confirmer</button>
                        </div>  
                    </div>
                </form>
                </div>

        
        
        
        
        </main>

        
        
        
        
        
        
        
        
        
        









        </div>

             
        </div>
    </div>
    <script src="./index.js"></script>
</body>
</html>