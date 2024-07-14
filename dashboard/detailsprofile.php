<?php 

session_start();

require 'configUser.php';

$db = mysqli_connect('localhost', 'root', '', 'crmn');
// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // Rediriger vers la page de connexion ou afficher un message d'erreur
    header('Location: connexion.php');
    exit();
}

// Récupérer l'ID de l'utilisateur connecté
$email = $_SESSION['email'];

// Récupérer les informations de l'utilisateur à partir de la base de données
$query = "SELECT * FROM personnels WHERE email = '$email'";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);

// Vérifier si les informations de l'utilisateur existent
if (!$user) {
    // Afficher un message d'erreur ou rediriger vers une page appropriée
    echo "Les informations de l'utilisateur n'ont pas été trouvées.";
    exit();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes informations personelles</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
<style>
  
        
 .infcontainer {
    background: #fff;
    width: 540px;
    height: 450px;
    margin: 0 auto;
    position: relative;
    margin-top: 10%;
    box-shadow: 2px 5px 20px rgba(119, 119, 119, .5);
    overflow-x: hidden;
    
}
 .left-box {
    float: left;
    top: -5px;
    left: 5%;
    position: absolute;
    width: 15%;
    height: 120%;
    background: #98c9ff ;
    box-shadow: 3px 3px 10px rgba(119, 119, 119, .5);
    border: .1em solid #fff;
    
    
}
nav  a{
  list-style: none;
  padding: 35%;
  color: #fff;
  font-size: 1.1em;
  display: block;
  transition: all .3s ease-in-out;
}
nav  a:hover{
    color: blue;
    cursor: pointer;
    transform: scale(1.2);
}
nav  a:first-child{
    margin-top: 90px;
}
.rightbox {
    width: 60%;
    margin-left: 27%;
}
.tabShow {
    transition: all .5s ease-in;
    width : 80%;

}
h1 {
    font-family: serif;
    color: #98c9ff;
    font-size: 1.5em;
    margin-top: 40px;
    margin-bottom: 35px;
    
}
.tabShow h2 {
    font-family: serif;
    color: #3244ed;
    font-size: 1.2em;
    margin-top: 10px;
    margin-left: 2px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.input, h4 {
    border: 0;
    border-bottom: 1px solid #3fb6a3;
    width: 80%;
    font-family: sans-serif;
    font-size: 1.2em;
    padding: 7px 0;
    color: #070707;
    outline: none;
    align-items: left;
    align-content: left;
}
.tabShow {
   display: none;
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

            <div class="infcontainer">
                <div class="left-box">
                    <nav>
                        <a onclick="tabs(0)"
                            class="tab active">
                            <span class="material-icons-sharp">
                            manage_accounts
                            </span>
                        </a>
                        <a onclick="tabs(1)"
                            class="tab">
                            <span class="material-icons-sharp">
                            manage_accounts
                            </span>
                        </a>
                        <a onclick="tabs(2)"
                            class="tab">
                            <span class="material-icons-sharp">
                            manage_accounts
                            </span>
                        </a>
                        
                        
                    </nav>

                </div>
               
                
                <div class="rightbox">
                    <div class="profile tabShow">
                        <h1>Mes informations</h1>
                        <h2>Nom :</h2> 
                        <h4> <?php echo $user['nom']; ?></h4>
                        <h2>Âge : </h2>
                        <h4>  <?php echo $user['age']; ?></h4>
                        <h2>Email :</h2>
                        <h4> <?php echo $user['email']; ?></h4>
                        <h2>Genre : </h2>
                        <h4> <?php echo $user['sexe']; ?></h4>
                        <h2>Cellulaire : </h2>
                        <h4> <?php echo $user['tel']; ?></h4>
                        <h2>Profession (Occupation) : </h2>
                        <h4> <?php echo $user['profession']; ?></h4>
                        
                    </div>
                    <div class="second tabShow">
                        <h1>Mes informations</h1>
                        <h2>Type ID : </h2>
                        <h4> <?php echo $user['type_id']; ?></h4>
                        <h2>Numéro ID : </h2>
                        <h4><?php echo $user['num_id']; ?></h4>
                        <h2>Situaton familiale :</h2>
                        <h4><?php echo $user['situ_fam']; ?></h4>
                        <h2>Nombre d'enfants : </h2>
                        <h4><?php echo $user['nbr_enf']; ?></h4>
                        <h2>Type d'adresse : </h2>
                        <h4><?php echo $user['type_adr']; ?></h4>
                        <h2>Pays: </h2>
                        <h4><?php echo $user['pays']; ?></h4>
                        <h2>Ville de résidance : </h2>
                        <h4><?php echo $user['ville']; ?></h4>
                    </div>
                    <div class="profile tabShow">
                        <h1>Mes informations</h4>
                        <h2>Adresse et rue  :</h4>
                        <h4><?php echo $user['adr']; ?></h4>
                        <h2>Code postal :</h2>
                        <h4><?php echo $user['code_postal']; ?></h4>
                        <h2>Délégation :</h2>
                        <h4><?php echo $user['delegation']; ?></h4>
                        
                    </div>
                </div>
                
            </div>

            
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">

        </div>
       
    </div>

    <script src="./index.js"></script>
    <script>
        const tabBtn =
        document.querySelectorAll(".tab");
        const tab =
        document.querySelectorAll(".tabShow");
        
        function tabs(panelIndex) {
            tab.forEach(function(node) {
                node.style.display = "none";
            });
            tab[panelIndex].style.display = "block";
        }
        tabs(0);

    </script>
    <script>
        $(".tab").click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        })
    </script>
</body>
</html>