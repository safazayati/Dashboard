<?php 
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-park</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
    <style>
     .actionbutton button{
        padding: 10px 30px;
        border-radius: 5px;
        border: none;
        outline: none;
        font-size: 1.5em;
        font-weight: 500;
        background: #eaf8f9;
        color: #000;
        text-align: center;
        margin: 2rem;
        width: 95%;
        cursor: pointer;

}
.btn button {
        padding: 10px 30px;
        border-radius: 5px;
        border: none;
        outline: none;
        font-size: 1.5em;
        font-weight: 500;
        background :#eaf8f9;
        color: #000;
        text-align: center;
        margin: 0rem;
        transform: translateX(27px);
        width: 95%;
        cursor: pointer;

}
.buttoncons button {
        padding: 10px 30px;
        border-radius: 5px;
        border: none;
        outline: none;
        font-size: 1.5em;
        font-weight: 500;
        background: #eaf8f9;
        color: #000;
        text-align: center;
        margin: 25px;
        transform: translateX(-2px);
        width: 95%;
        cursor: pointer;

}
h1 {
    color:  #000;
    text-align: center;
}
.middle {
  text-align: center;
  
  
  
}

    </style>

</head>
<body> 
    <div class="container">
        <aside>
            <div class="top"> 
                <div class="logo">
                    <img src="images/logo crmn.png">
                    <h2>CR<span class="danger">MN</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="espace.php">
                        <span class="material-icons-sharp">account_circle</span>
                        <h3>Mon espace</h3>
                </a>
            
                <a href="tableau.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Tableau de bord</h3>
                </a>
           <!--------- <a href="documents.php" >
                    <span class="material-icons-sharp">folder_open</span>
                    <h3>Documents</h3>
                </a> ------------>       
                <a href="personnels.php" >
                <span class="material-icons-sharp">people</span>
                    <h3>Personnels</h3>
                </a>     
                <a href="conges_abs.php">
                    <span class="material-icons-sharp">holiday_village</span>
                    <h3>Congés et Absences</h3>
                </a>
                <a href="calendrier.php">
                    <span class="material-icons-sharp">today</span>
                    <h3>Calendrier</h3>
                </a>
                <a href="disponibilite.php">
                    <span class="material-icons-sharp">meeting_room</span>
                    <h3>Disponibilité des salles</h3>
                </a>
                 <!--------- <a href="ordonnancement.php">
                    <span class="material-icons-sharp">assignment</span>
                    <h3>Ordonnancement</h3>
                </a>------------>
                
                <a href="autopark.php">
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
            <h1>Auto-park</h1>

            <div class="date">
                 <input type="date">              
            </div>
            <div class="Insights">
                <div class="collaborations">
                <span class="material-icons-sharp">drive_eta</span>
                
                    <div class="middle">
                        
                            <h3 >Total voitures</h3>
                            <h1 >10</h1>
                        
                        
                    </div>
                </div>
                 <!---------END OF COLLABORATIONS------------>
                 <div  class="projets">
                 <span class="material-icons-sharp">drive_eta</span>
                    <div class="middle">
                    
                            <h3 >Voitures disponibles</h3>
                            <h1 >03</h1>
                        
                    </div>
                </div>
                 <!---------END OF PROJETS------------>
                 <div  class="Visiteurs">
                 <span  class="material-icons-sharp">drive_eta</span>
                    <div class="middle">
                        
                            <h3 >Voitures en mission</h3>
                            <h1 >02</h1>
                    
                    </div>
                </div>

            </div>
            <div class="actionbutton">
                <a href="ajouter.php">
                    <button >Ajouter voiture</button>
                

                </a>
            </div>
            <div class="btn">
            <a href="reserver.php">
                    
                    <button >Réserver une voiture</button>

                </a>

            </div>
            <div class="buttoncons">
            <a href="consultervoit.php">
                    
                    <button >Consulter détails voitures</button>

                </a>
                
        </main>
        
               
        
        
        <!--------- END OF MAIN------------>

      
 <!---------END OF TOP------------>
           
        </div>
    </div>
    <script src="./index.js"></script>
</body>
</html>