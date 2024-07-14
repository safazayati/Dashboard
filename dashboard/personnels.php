<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des personnels</title>
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
        table-layout:fixed;
         
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
  
    th,td {
         padding:0.7em; 
        text-align: center; 
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
        
        border: 1px solid black;
    }
    .nv-button     {
        padding: 10px 30px;
        border-radius: 10px;
        border: none;
        outline: none;
        font-size: 1.5em;
        font-weight: 300;
        background: #eaf8f9;
        color: #000;
        text-align: center;
        margin: 3rem;
        width: 90%;
        cursor: pointer;
    }
    .modifbutton {
        float: left;
        margin-right: 10px;
        color: #000;
        background: #eaf8f9;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 300;
        padding: 5px 10px ; 
        cursor: pointer;
        border: 0.5px solid #DCDCDC;
      
    }
    .supprimbutton  {
        float: left;
        margin-right: 10px;
        border-radius: 10px;
        color: #000;
        background: #eaf8f9;
        margin: 10px;
        font-size: 15px;
        font-weight: 300;
        padding: 5px 10px ; 
        cursor: pointer;
        border: 0.5px solid #DCDCDC;
        transform: translateX(-10px);
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
            <h1>Liste des personnels</h1>
            <br>
            <a class="nv-button" href="create.php" role="button">Nouveau personnel</a>
            <br>
            <table border='2' class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Numéro ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db = mysqli_connect('localhost', 'root', '', 'crmn');
                    //read all row from database table
                    $sql = "SELECT * FROM personnels";
                    $result= mysqli_query($db,$sql) or die("bad query");


                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }
                        //read data for each row 
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['nom']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['tel']}</td>
                                <td>{$row['adr']}</td>
                                <td>{$row['num_id']}</td>
                                <td>
                                <a class='modifbutton' href='Modifier.php?num_id={$row['num_id']}' style='width:100%;height:100%'>Modifier</a>

                                    <a class='supprimbutton' href='supprimer.php?num_id={$row['num_id']}' style='width:100%;height:100%'>Supprimer</a>
                                </td>
                            </tr>
                            ";
                        }
                        
                    
                    ?>
                    
                </tbody>

            </table>
        </main>
        <!--------- END OF MAIN------------>


 <!---------END OF TOP------------>
            
        </div>
    </div>
    <script src="./index.js"></script>
</body>
</html>