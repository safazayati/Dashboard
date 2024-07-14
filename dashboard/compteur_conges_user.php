<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur des congés</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="index.css">
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
    margin-top: 5rem;
    box-shadow: var(--box-shadow);
    transition: all 500ms ease;
    text-align: center;
    width: 600px;
    
    display: inline-block;

      
} 

.Insights  button{
    padding: 10px 10px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-size: 1em;
    font-weight: 500;
    background: #87CEFA;
    color: #fff;
    text-align: center;
    margin: 50px;
    cursor: pointer;
    background: #87CEFA;
    transform: translateX(10px);
    display: inline-block;

}


main .Insights > div:hover {
    box-shadow: none;
      
} 
main .label {
    display: inline-block;
      
} 

main .Insights > div span {
    background: #fff;
    padding: 0.5rem;
    border-radius: 50%;
    color: #87CEFA;
    font-size: 2rem;
    text-align: center; 
    display: inline-block;
} 
main .Insights > div span .inf {
    background: #fff;
    padding: 0.5rem;
    border-radius: 50%;
    color: #87CEFA;
    font-size: 2rem;
    text-align: center; 
    display: inline-block;
} 

main .Insights > div.Projets span {
    background: #fff;
    text-align: center;
 
} 

main .Insights > div.Visiteurs span {
    background: #fff;
 
} 
main .Insights > div .middle {
    display: inline-block;
    align-items: center;
    justify-content: space-between;
 
} 

main .Insights h3 {
    margin: 3rem 0 2rem;
    font-size: 1.5rem;
    transform: translateX(90px);
    margin-top: 10%;
    
 
} main  .info {
    margin: 3rem 0 2rem;
    font-size: 1rem;
    transform: translateX(50px);
    margin-top: 20%;
    display: inline-block;
    
 
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
    display: inline-block;
    justify-content: center;
    align-items: center;
    height: 120vh;

}
table {
      border-collapse: collapse;
      border: 5px solid #ddd;
      margin: 90px;

    }

    th, td {
      padding: 10px;
      text-align: left;
      font-family: Arial, sans-serif;
      font-size: 15px;
    
    }
    
    th, tr {
      padding: 10px;
      text-align: left;
      font-family: Arial, sans-serif;
      font-size: 15px;
    
    }
    tr, td {
      padding: 5px;
      text-align: left;
      font-family: Arial, sans-serif;
      font-size: 15px;
      
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
      font-weight: italic;
      width: 600px;
      text-align: center;
      
    }

    td {
      border: 3px solid #dddddd;
      
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
            <h1>Compteur des congés</h1>

            <div class="Insights">
                <div class="Collaborations">
                    <span class="material-icons-sharp">calculate</span>
                    <table id="absences">
                        <tr>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Absent(e)</th>
                        </tr>
                    </table>
                    <small class="text-muted">Année 2022-2023</small>
                </div>
                <div class="Collaborations">
                    <div class="info">
                        <label>Vos acquis :</label>
                        <span class="inf" id="acquis">25</span>
                    </div>
                    <div class="info">
                        <label>Votre solde total :</label>
                        <span class="inf" id="soldeTotal">0</span>
                    </div>
                    <div class="info">
                        <label>Vos congés pris :  </label>
                        <span class="inf" id="absencesPrises">0</span>
                    </div>
                    <button onclick="ajouterAbsence()">Ajouter un congé</button>
                    <button onclick="reinitialiser()">Réinitialiser</button>
                </div>
            </div>
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">
          
 <!---------END OF TOP------------>
            
        </div>
    </div>
    <script src="./index.js"></script>
    <script src="compt_conges.js"></script>
</body>
</html>