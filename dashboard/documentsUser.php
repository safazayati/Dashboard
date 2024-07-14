<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
    <style>

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
    tr:nth-child(even) {background-color: #f2f2f2;}
    button {
    font-size: 14px;
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 35px;
    max-width: 200px;
    width: 90px;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    background-color: #98c9ff;
    transition: all 0.3s linear;
    cursor: pointer;
    transform: translateX(210px);
    margin: -8px 0 9px ;
    
    }
    .form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    background:#f2f2f2;
    margin: 15px 0;

    }
    .form .input-field{
      display: flex;
      width: calc(100% / 3 - 15px);
      flex-direction: column;
      margin: 15px 0;
      color: #000;
      border-radius: 30px;
    }
    

    .input-field label{
      font-size: 12px;
      font-weight: 500;
      color: #000;
      margin: 20px 0;
      
    }
    .td input{
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      background:#f2f2f2;
      margin: 15px 0;
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
                <a href="documentsUser.php" >
                    <span class="material-icons-sharp">folder_open</span>
                    <h3>Documents</h3>
                </a>            
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
        <h1>Documents</h1>
          
<table>
<tr>
    <td><form action="" method="get">
      <input type="text"name="seach" id="search-bar" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" class="form-control" placeholder="Chercher un document">
  <button type="submit" class="btn btn-primary">Rechercher</button></td> 
  </form>
  </tr>
  <tr>
    <th>Les différentes documents administratifs</th> 
    
  </tr>
  <div id="list">
  <tr>
    <td><a href="DemandeConges_user.php"> • Document 1</a></td>
  </tr>
  <tr>
    <td> <a href="document2.php"> • Document 2</a></td>
  </tr>
  <tr>
    <td> <a href="document3.php"> • Document 3</a></td>
  </tr>
  <tr>
    <td> <a href="document4.php"> • Document 4</a></td>
  </tr>
  <tr>
    <td> <a href="document5.php"> • Document 5</a></td>
  </tr>
  <tr>
    <td> <a href="document6.php"> • Document 6</a></td>
  </tr>
  <tr >
    <td> <a href="document7.php"> • Document 7</a></td>
  </tr>
  </div>
 
 

  
</table>
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">
         
            
 <!---------END OF TOP------------>
            
        </div>
    </div>

    <script src="./index.js"></script>
   
</body>
</html>