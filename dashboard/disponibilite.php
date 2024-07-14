<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'crmn');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibilté des salles</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
    <style>
               table {
        border-collapse: collapse;
        border: 5px solid #000;
        margin: 90px;
         
    }
     td {
        padding: 10px;
        text-align: center;
        font-family: Arial, sans serif;
        font-size: 15px;
    }
    tr, td {
        padding: 5px;
        text-align: center;
        font-family: Arial, sans serif;
        font-size: 15px;
        border: 3px solid #000;
    }
    th, td {
      padding: 10px;
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
        border: 3px solid #000;
    }
    CAPTION {
        font-weight: bold;
        font-size: 20px;
        color: #85C1E9;
    }
    h1 {
        color: #000;
    }
    h4{
        font-family: Arial, sans-serif;
        padding: 20px;
        font-size: x-large;
        caption-side: bottom;
        color: #666;
        text-align: center;
        letter-spacing: 1px;
        transform: translateX(5px);
        color : #21618C ;
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
            <h1>Détails des réservations des salles</h1>
            <?php

$db = mysqli_connect('localhost', 'root', '', 'crmn');

$sql="select * from reservation";
$result= mysqli_query($db,$sql) or die("bad query");

echo "<table border='1'bgcolor=#F9EBEA>";
echo "<tr><td>Nom</td><td>Département</td><td>Salle</td><td>Début</td><td>Fin</td><td>Date</td></tr>\n" ;
while($row=mysqli_fetch_assoc($result)) {
echo "<tr><td>{$row['nom']}</td><td>{$row['nom_depart']}</td><td>{$row['nom_salle']}</td><td>{$row['heure_debut']}</td><td>{$row['heure_fin']}</td><td>{$row['date_res']}</td></tr>\n" ;

  }
echo "</table>" ;


?>
        
        </main>
        <!--------- END OF MAIN------------>


 <!---------END OF TOP------------>
            
        </div>
    </div>
    <script src="./index.js"></script>
</body>
</html>