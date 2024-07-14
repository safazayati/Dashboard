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
    <title>Consulter historique voiture</title>
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
            <h1>Historique voiture</h1>
            <?php

                $db = mysqli_connect('localhost', 'root', '', 'crmn');

                $sql="select * from voiture";
                $result= mysqli_query($db,$sql) or die("bad query");

                echo "<h4>Voiture</h4>
                <table border='1'bgcolor=#F9EBEA>";
                echo "<tr><td>Matricule</td><td>Marque</td><td>modele</td><td>Num carte grise</td><td>Puissance</td><td>Type carburant</td><td>Désignation</td><td>Date d'achat</td><td>Date circulation</td><td>Nombre de place</td><td>KM départ</td></tr>\n" ;
                while($row=mysqli_fetch_assoc($result)) {
                echo "<tr><td>{$row['matricule_voit']}</td><td>{$row['marque']}</td><td>{$row['modele']}</td><td>{$row['num_cartegrise']}</td><td>{$row['puissance']}</td><td>{$row['type_carburant']}</td><td>{$row['designation']}</td><td>{$row['date_achat']}</td><td>{$row['date_circulation']}</td><td>{$row['nbr_place']}</td><td>{$row['km_depart']}</td></tr>\n" ;

                  }
                echo "</table>" ;
              
                $sql="SELECT * FROM certificat_visitetech";
                $result= mysqli_query($db,$sql) or die("bad query");

                echo "<h4>Certificat visite technique</h4>
                <table border='1'bgcolor=#F9EBEA>";
                echo "<tr><td>Numéro certificat</td><td>Matricule voiture</td><td>Date éxpiration</td></tr>\n" ;
                while($row=mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row['num_certif']}</td><td>{$row['matricule_voit']}</td><td>{$row['date_expiration']}</td></tr>\n" ;

                }
                echo "</table>" ;
                $sql="SELECT * FROM demande_vehicule";
                $result= mysqli_query($db,$sql) or die("bad query");

                echo "<h4>Demande véhicule</h4>
                <table border='1' bgcolor=#F9EBEA>";
                echo "<tr><td>Matricule voiture</td><td>Numéro demande</td><td>Destination</td><td>Date début mission</td><td>Objet mission</td><td>Date fin mission</td><td>Nom et prénom</td></tr>\n";
                
                while($row=mysqli_fetch_assoc($result)) {
                echo "<tr><td>{$row['matricule_voit']}</td><td>{$row['num_demande']}</td><td>{$row['destination']}</td><td>{$row['date_debut_mission']}</td><td>{$row['objet_mission']}</td><td>{$row['date_fin_mission']}</td><td>{$row['nom_et_prenom']}</td></tr>\n";

                }
                echo "</table>" ;
                
                $sql="SELECT * FROM autorisation_sortie";
                $result= mysqli_query($db,$sql) or die("bad query");
                
                echo "<h4>Autorisation sortie</h4>
                <table border='1'  bgcolor=#F9EBEA >";
                echo "<tr><td>Numéro ID</td><td>Nombre de jour</td><td>Motif</td><td>Date départ</td></tr>\n" ;
                while($row=mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row['num_id']}</td><td>{$row['nbr_j']}</td><td>{$row['motif']}</td><td>{$row['date_depart']}</td></tr>\n" ;

                }
                echo "</table>" ;


?>

        <!--------- END OF MAIN------------>

        
 <!---------END OF TOP------------>
            
        
    </div>
    <script src="./index.js"></script>
</body>
</html>