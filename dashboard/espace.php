
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






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Mon espace</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="index.css">
<style>
        
 .body .card {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    
}
 .card {
    position: relative;
    width: 300px;
    height: 180px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
    transition: 0.5s;
    margin: 200px 0;
    transform: translateX(700px);
   
    }
    .card:hover {
    height: 250px;
}
.imgBx {
    position: absolute;
    left: 50%;
    top: -45%;
    transform: translateX(-50%);
    width: 150px;
    height: 150px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.35);
    overflow: hidden;
}
.imgBx  img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    
}
.card .card-content {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    overflow: hidden;
}
.card .card-content .card-details {
    padding: 40px;
    text-align: center;
    width: 100%;
    transition: 0.5s;
    transform: translateY(230px);

    
}
.card:hover .card-content .card-details {
    transform: translateY(0px);

}
.card .card-content .card-details h2 {
    font-size: 0.80em;
    font-weight: 800;
    color: #0070BB;
    line-height: 1.2em;
    margin: 50px 0;
}
.card .card-content .card-details span {
    font-size: 1em;
    font-weight: 500;
    opacity: 0.5;
    margin: 20px 0;
}
.card .card-content .card-details .actionBtn button{
    padding: 10px 30px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-size: 1em;
    font-weight: 500;
    background: #87CEFA;
    color: #fff;
    text-align: center;
    cursor: pointer;

}
.card .card-content .card-details .actionBtn2 button{
    padding: 10px 30px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-size: 1em;
    font-weight: 500;
    background: #87CEFA;
    color: #fff;
    text-align: center;
    margin: 10px;
    cursor: pointer;

}
.profile-container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 1200px;
    flex-wrap: wrap;
    z-index: 1;
    margin: 50px 0;
    transform: translateX(-900px);
    width: 600px ;
    
}
.profile-container .profile-card {
    position: relative;
    width: 600px;
    height: 400px;
    margin: 30px;
    box-shadow: 20px 20px 50px rgba(0,0,0,0.700);
    border-radius: 15px;
    background: #fff;
    overflow: hidden;
    justify-content: center;
    align-items: center;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(5px);
    
}
.profile-container .profile-card .profile-content  {
    padding: 90px;
    text-align: center;
    transform: translateY(50px);
    opacity: 1;
    transition: 0.5s;
}
.profile-container .profile-card:hover .profile-content  {
    transform: translateY(0px);
    opacity: 1;
}
.profile-container .profile-card .profile-content h2  {
    position: absolute;
    top: 20px;
    right: 5px;
    font-size: 1.6em;
    color: #0070BB;
    font-family: serif;
    
}
.profile-container .profile-card .profile-content h3  {
   
    font-size: 1.5em;
    color: #87CEFA;
    z-index: 1;
}
.profile-container .profile-card .profile-content h5  {
    font-size: 1.5em;
    color: #87CEFA;
    font-weight: 300;
    font-family: sans-serif;
    padding: 3px 0;
}
h6 {
    
    width: 80%;
    font-family: sans-serif;
    font-size: 1em;
    padding: 3px 0;
    color: #070707;
    align-items: center;
    align-content: center;
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
        <h1>Mon espace</h1>
        
        <div class="card">
                <div class="imgBx">
                    <img src="images/config1.jpg">
                </div>
                    <div class="card-content">
                        <div class="card-details">
                            <h2>Mise à jour des informations personnelles<br><span>des utilisateurs du CRMN</span></h2>
                                <div class="actionBtn">
                                    <a href="edit_profile.php">
                                        <button>Modifier</button> 
                                     </a>
                                 </div> 
                                 <div class="actionBtn2">
                                    <a href="detailsprofile.php">
                                        <button>Consulter profile</button> 
                                     </a>
                                 </div> 
                            </div>
                    </div>
             </div>
      
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">

        <form action="config.php" method="post">
        
            <div class="profile-container">
                <?php
                if (!$user) {
                    // Afficher un message d'erreur ou rediriger vers une page appropriée
                    echo "<h3 class ='message my-3 text-center bg-dark text-white rounded-lg p-3 center?>Les informations de l'utilisateur n'ont pas été trouvées..</h3>";
                    
                    exit();
                }
                ?>
                <div class="profile-card">
                    <div class="profile-content">
                        <h2>Bienvenue dans votre profile Monsieur/Madame <?php echo $user['nom']; ?> </h2>
                        <h3>  Quelques informations sur vous</h3>
                        
                        
                        <h5>Votre email : <?php echo $user['email']; ?></h5>
                        
                        <h5>Votre CIN : <?php echo $user['num_id']; ?> </h5>
                        
                        <h5>Vous êtes un(e) : <?php echo $user['profession']; ?></h5>
                        
                        

                    </div>
                 </div>
            </div>
        </form>

            
        </div>
    </div>
    
 <!---------END OF TOP------------>
            
 <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelector(".profile-card"),{
		max: 25,
		speed: 400,
        glare: true,
        "max-glare": 1,
	});
    </script>
    <script src="./index.js"></script>
    
</body>
</html>
