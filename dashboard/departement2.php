<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Département 2</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin: 50px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
  font-size: 1.2em;
  font-weight: italic;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
td .actionBtn2 button{
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
            <h1>Département 2</h1>
          
            <table>
  <tr>
    <th>Nom de salle</th>
    <th>Type de salle</th>
    <th>Capacité</th>
    <th>Résérver</th>
  </tr>
  <tr>
    <td>Salle 1</td>
    <td>Laboratoire chimie</td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td>  </tr>
  <tr>
  <td>Salle 2</td>
    <td>Laboratoire chimie</td>
    <td>10</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td>  </tr>
  <tr>
  <td>Salle 3</td>
    <td>Laboratoire </td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td>  </tr>
  <tr>
  <td>Salle 4</td>
    <td>Laboratoire chimie</td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td>  </tr>
  <tr>
  <td>Salle 5</td>
    <td>Laboratoire chimie</td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td>  </tr>
  <tr>
  <td>Salle 6</td>
    <td>Laboratoire chimie</td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td>  </tr>
  <tr>
  <td>Salle 7</td>
    <td>Salle</td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
<tr>
  <td>Salle 8</td>
    <td>Laboratoire </td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
<tr>
  <td>Salle 9</td>
    <td>Laboratoire chimie</td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
<tr>
  <td>Salle 10</td>
    <td>Salle </td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
<tr>
  <td>Salle 11</td>
    <td>Laboratoire </td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
<tr>
  <td>Salle 12</td>
    <td>Laboratoire chimie</td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
<tr>
  <td>Salle 13</td>
    <td>Laboratoire </td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
<tr>
  <td>Salle 14</td>
    <td>Salle </td>
    <td>20</td>
    <td>
    <div class="actionBtn2">
    <a href="reservationSalle.php">                                        <button>Réserver</button> 
                                     </a>
                            </div> </td></tr>
</table>

            
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
            </div>
        </div>
       
    </div>

    <script src="./index.js"></script>
</body>
</html>