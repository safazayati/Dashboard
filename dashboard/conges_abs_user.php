<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congés et Abscences</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
<style>
main .Insights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.6rem;  
    
      
} 
main .Insights > div {
    background: #fff;
    padding: var(--card-paddings);
    border-radius: var(--card-border-radius);
    margin-top: 2rem;
    box-shadow: var(--box-shadow);
    transition: all 500ms ease;
    text-align: center;
    width: 600px;

      
} 

.Insights  button{
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
    transform: translateX(90px);
    display: inline-block;

}


main .Insights > div:hover {
    box-shadow: none;
      
} 

main .Insights > div span {
    background: #fff;
    padding: 0.5rem;
    border-radius: 50%;
    color: #87CEFA;
    font-size: 2rem;
    text-align: center; 
} 

main .Insights > div.Projets span {
    background: #fff;
    text-align: center;
 
} 

main .Insights > div.Visiteurs span {
    background: #fff;
 
} 
main .Insights > div .middle {
    display: flex;
    align-items: center;
    justify-content: space-between;
 
} 

main .Insights h3 {
    margin: 3rem 0 2rem;
    font-size: 1.5rem;
    transform: translateX(90px);
    margin-top: 10%;
    
 
} 
main .Insights h4 {
    margin: 3rem 0 2rem;
    font-size: 1rem;
    transform: translateX(90px);
    margin-top: 20%;
    
} 



main .Insights small {
    margin-top: 1.3rem;
    display: block;
} 
.main .img  {
    width: 60%;
}
.main .div {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 120vh;
    
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
            <h1>Congés et abscences</h1>

            <div class="Insights">
                <div class="Collaborations">
                <span class="material-icons-sharp">badge</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Mes Congés</h3>
                            <h4>Acquis <span class="material-icons-sharp">expand_more</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     Solde <span class="material-icons-sharp">expand_more</span>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                 &nbsp; &nbsp;  Pris   <span class="material-icons-sharp">expand_more</span> </h4> 
                                    
                                    <a href="compteur_conges_user.php">
                                        <button>Consulter</button> 
                                     </a>
                        
                                   
                            
                        </div>
                       
                    </div>
                    <small class="text-muted">Année 2022-2023</small>
                </div>

                <div class="Projets">
                <span class="material-icons-sharp">badge</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Mes autorisations de sortie</h3>
                            
                            <h4>&nbsp; &nbsp;  Pris   <span class="material-icons-sharp">expand_more</span> </h4> 
                            
                                    
                            
                                    <a href="compteur_abscence_user.php">
                                        <button>Consulter</button> 
                                     </a>
                            
                            
                                    
                             
                        </div>
                       
                    </div>
                    <small class="text-muted">Année 2022-2023</small>
                
                </div>
            </div>
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">
        </div>
    </div>

    <script src="./index.js"></script>
</body>
</html>