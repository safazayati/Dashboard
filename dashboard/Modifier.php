<?php
// Vérification de la méthode de requête
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Étape 1: Récupérer l'identifiant du personnel à modifier
    if (isset($_GET['num_id']) && !empty($_GET['num_id'])) {
        $num_id = $_GET['num_id'];
        
        // Étape 2: Récupérer les données du personnel à partir de la base de données
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crmn";

        $conn = new mysqli("localhost", "root", "", "crmn"); 
        
        if ($conn->connect_error) {
            die("Connexion échouée: " . $conn->connect_error);
        }

        // Récupération des données du personnel
        $sql = "SELECT * FROM personnels WHERE num_id = '$num_id'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            // Stocker les données dans des variables individuelles
            $nom = $row['nom'];
            $age = $row['age'];
            $email = $row['email'];
            $tel = $row['tel'];
            $sexe = $row['sexe'];
            $profession = $row['profession'];
            $type_id = $row['type_id'];
            $num_id = $row['num_id'];
            $situ_fam = $row['situ_fam'];
            $nbr_enf = $row['nbr_enf'];
            $type_adr = $row['type_adr'];
            $pays = $row['pays'];
            $ville = $row['ville'];
            $adr = $row['adr'];
            $code_postal = $row['code_postal'];
            $delegation = $row['delegation'];
            // et ainsi de suite pour les autres champs
        } else {
            // Redirection en cas de personnel non trouvé
            header("Location: personnels.php");
            exit();
        }
        
        // Étape 3: Afficher le formulaire de modification avec les données pré-remplies
        ?>
        
        <?php
    } else {
        // Redirection en cas d'identifiant manquant
        header("Location: personnels.php");
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Étape 4: Traiter la soumission du formulaire de modification
    if (isset($_POST['num_id']) && !empty($_POST['num_id'])) {
        $num_id = $_POST['num_id'];

        // Récupérer les valeurs modifiées depuis le formulaire
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $sexe = $_POST['sexe'];
        $profession = $_POST['profession'];
        $type_id = $_POST['type_id'];
        $num_id = $_POST['num_id'];
        $situ_fam = $_POST['situ_fam'];
        $nbr_enf = $_POST['nbr_enf'];
        $type_adr = $_POST['type_adr'];
        $pays = $_POST['pays'];
        $ville = $_POST['ville'];
        $adr = $_POST['adr'];
        $code_postal = $_POST['code_postal'];
        $delegation = $_POST['delegation'];
        // et ainsi de suite pour les autres champs

        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crmn";

        $conn = new mysqli("localhost", "root", "", "crmn"); 
        if ($conn->connect_error) {
            die("Connexion échouée: " . $conn->connect_error);
        }

        // Mettre à jour les données dans la base de données
        $sql = "UPDATE personnels SET nom = '$nom', age = '$age', email = '$email', tel = '$tel', sexe= '$sexe' , profession= '$profession' , type_id= '$type_id' , num_id = '$num_id', situ_fam= '$situ_fam' , nbr_enf = '$nbr_enf' , type_adr= '$type_adr' , pays= '$pays' , ville= '$ville' , adr =' $adr' , code_postal='$code_postal' , delegation='$delegation' WHERE num_id = '$num_id'";
        if ($conn->query($sql) === TRUE) {
            // Redirection vers la page personnels.php après la modification
            header("Location: personnels.php");
            exit();
        } else {
            echo "Erreur lors de la modification : " . $conn->error;
        }
    } else {
        // Redirection en cas d'identifiant manquant
        header("Location: personnels.php");
        exit();
    }
} else {
    // Redirection en cas de méthode de requête invalide
    header("Location: personnels.php");
    exit();
}
?>

       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->
    <title>Modifier un personel</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
     <!----===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<style>
           
            .container .input-group-text{
                border-radius: 40px;
                width : 50px;
                background-color : #f39c12;
                justify-content: center ;
                color : white;
            } 
            .container .form-control{
                border-radius: 40px;
                height : 50px;
            }

            .container .btn{
                width: 49%;
                height: 50px;
                margin: 20px auto;
                border-radius: 40px;
                justify-content: center;
                text-align: center;
            }





            .info-container{
                position: absolute;
                max-width: 900px;
                width: 100%;
                border-radius: 10px;
                padding: 40px;
                margin: 50px 0;
                transform: translateX(-900px);
                background-color: #fff;
                box-shadow: 0 15px 20px rgba(0,0,0,0.5);
            }
            .info-container header{
                position: relative;
                font-size: 20px;
                font-weight: 600;
                color: #98c9ff;
            }
            .info-container header::before{
                content: "";
                position: absolute;
                left: 0;
                bottom: -2px;
                height: 4px;
                width: 80px;
                border-radius: 8px;
                background-color: #98c9ff;
            }
            .info-container form{
                position: relative;
                margin-top: 16px;
                min-height: 490px;
                
                overflow: hidden;
            }
            .info-container form .form{
                position: absolute;
                background-color: #fff;
                transition: 0.3s ease;
            }
            .info-container form .form.second{
                opacity: 0;
                pointer-events: none;
                transform: translateX(100%);
            }
            form.secActive .form.second{
                opacity: 1;
                pointer-events: auto;
                transform: translateX(0);
            }
            form.secActive .form.first{
                opacity: 0;
                pointer-events: none;
                transform: translateX(-100%);
            }
            .info-container form .title{
                display: block;
                margin-bottom: 8px;
                font-size: 16px;
                font-weight: 500;
                margin: 6px 0;
                color:  #3244ed;
            }
            .info-container form .fields{
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: wrap;
                

            }
            form .fields .input-field{
                display: flex;
                width: calc(100% / 3 - 15px);
                flex-direction: column;
                margin: 4px 0;
                color: #000;
            }
            .input-field label{
                font-size: 12px;
                font-weight: 500;
                color: #98c9ff;
                

                
            }
            .input-field input, select{
                outline: none;
                font-size: 14px;
                font-weight: 400;
                color: #98c9ff;
                border-radius: 5px;
                border: 1px solid #aaa;
                padding: 0 15px;
                height: 42px;
                margin: 8px 0;
                color: #000;
            }
            .input-field input :focus,
            .input-field select:focus{
                box-shadow: 0 3px 6px rgba(0,0,0,0.13);
                color: #6D6D6D;
            }
            .input-field select,
            .input-field input[type="date"]{
                color: #6D6D6D;
            }
            .input-field input[type="date"]:valid{
                color: #6D6D6D;
            }
            .info-container form button, .backBtn{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 45px;
                max-width: 200px;
                width: 100%;
                border: none;
                outline: none;
                color: #fff;
                border-radius: 5px;
                margin: 25px 0;
                background-color: #98c9ff;
                transition: all 0.3s linear;
                cursor: pointer;
            }
            .info-container form .btnText{
                font-size: 14px;
                font-weight: 400;
            }
            form button:hover{
                background-color: #98c9ff;
            }
            form button i,
            form .backBtn i{
                margin: 0 6px;
            }
            form .backBtn i{
                transform: rotate(180deg);
            }
            form .buttons{
                display: flex;
                align-items: center;
            }
            form .buttons button , .backBtn{
                margin-right: 14px;
            }

            @media (max-width: 750px) {
                .container form{
                    overflow-y: scroll;
                }
                .info-container form::-webkit-scrollbar{
                display: none;
                }
                form .fields .input-field{
                    width: calc(100% / 2 - 15px);
                }
            }

            @media (max-width: 550px) {
                form .fields .input-field{
                    width: 100%;
                }
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
            <h1>Modifier un personnel</h1>

           
        </main>
        <!--------- END OF MAIN------------>
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>

                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active ">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
               

            </div>

        
            <div class="info-container">
                <form action="modifier.php" method="post">
                <input type="hidden" name="num_id" value="<?php echo $num_id; ?>">

                        <div class="form first">
                            <div class="Modifier personal">
                              <span class="title">Modifier personnel</span>
        
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Nom</label>
                                            <input type="Text" name="nom" value="<?php echo $nom; ?>" placeholder="Entrer le nom" required >
                                    </div>
                                    <div class="input-field">
                                        <label>Age</label>
                                            <input type="number" name="age" value="<?php echo $age; ?>" placeholder="Entrer l'age" required>
                                    </div>
                                    <div class="input-field">
                                        <label>Email</label>
                                            <input type="Text" name="email" value="<?php echo $email; ?>" placeholder="Entrer l'email" required>
                                    </div>
                
                                    <div class="input-field">
                                        <label>Téléphone</label>
                                            <input type="number"  name="tel" value="<?php echo $tel; ?>"placeholder="Entrer le numero" required>
                                    </div>
                           
                                </div>
                            </div>
        
                                    <div class="Nouveau personnel">
                                        <span class="title">Détails personnel</span>
                    
                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Sexe</label>
                                                            <select name="sexe" value="<?php echo $sexe; ?>" required>
                                                                <option disabled selected>Selectionnez une option</option>
                                                                <option value="homme">Homme</option>
                                                                <option value="femme">Femme</option>
                                                                <option value="autre">Autre</option>
                                                            </select>                       
                                            </div>
                                            <div class="input-field">
                                                <label>Profession</label>
                                                    <input type="text" name="profession" value="<?php echo $profession; ?>" placeholder="Entrer la profession" required>
                                            </div>
                                            <div class="input-field">
                                                <label>Type ID</label>
                                                    <input type="text" name="type_id" value="<?php echo $type_id; ?>" placeholder="Entrer le type ID" required>
                                            </div>
                                            <div class="input-field">
                                                <label>Numéro ID</label>
                                                    <input type="number" name="num_id" value="<?php echo $num_id; ?>" placeholder="Entrer le num ID" required>
                                            </div>
                                        </div>
                         <button class="nextBtn">
                                    <span class="btnText">Suivant</span>
                                    <i class="uil uil-navigator"></i>
                         </button>
        
                         </div> 
                        </div>
                            <div class="form second">
                                <div class="details perso">
                                    <span class="title">Détails d'adresse / familiale</span>
                
                                <div class="fields">
                                    <div class="input-field">
                                            <label>Situation familiale</label>
                                                <select name="situ_fam" value="<?php echo $situ_fam; ?>" required>
                                                            <option disabled selected>Selectionnez une option</option>
                                                            <option value="celibataire">Célibataire</option>
                                                            <option value="marie">Marié(e)</option>
                                                            <option value="autre">Autre</option>
                                                </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Nombre d'enfants</label>
                                                <input type="number"  name="nbr_enf"value="<?php echo $nbr_enf; ?>" placeholder="Entrer un nombre" required>
                                        </div>
                                        <div class="input-field">
                                            <label>Type d'adresse</label>
                                                <input type="text" name="type_adr" value="<?php echo $nbr_enf; ?>" placeholder="Permanente ou Temporaire" required>
                                        </div>
                                        <div class="input-field">
                                            <label>Pays</label>
                                                <input type="text" name="pays" value="<?php echo $pays; ?>" placeholder="Entrer votre pays" required>
                                        </div>
                            
                                        <div class="input-field">
                                            <label>ville de résidence</label>
                                                <input type="text" name="ville" value="<?php echo $ville; ?>" placeholder="Entrer votre ville" required>
                                        </div>
                            
                                        <div class="input-field">
                                            <label>Adresse et rue</label>
                                                <input type="text" name="adr" value="<?php echo $adr; ?>" placeholder="Enter votre adresse " required>
                                        </div>
                            
                                        <div class="input-field">
                                            <label>Code postal</label>
                                                <input type="number" name="code" value="<?php echo $code_postal; ?>" placeholder="Entrer le code" required>
                                        </div>
                            
                                        <div class="input-field">
                                            <label>Délégation</label>
                                                <input type="text" name="delegation" value="<?php echo $delegation; ?>" placeholder="Entrer commune" required>
                                        </div>
                                    </div>
                                </div>
                
                                    <div class="buttons">
                                        <div class="backBtn">
                                            <i class="uil uil-navigator"></i>
                                            <span class="btnText">Précédent</span>
                                        </div>
                                        

                                        <button class="sumbit" name="modifier.php">
                                              
                                            <span class="btnText">Confirmer</span>
                                            <i class="uil uil-navigator"></i>
                                        </button>
                                    </div>
                                
                            </div>
              
                </form>
            </div>


 <!---------END OF TOP------------>
           
        </div>
    </div>
    <script src="./index.js"></script>
    <script src="script.js"></script>
    <script src="editprofilejs.js"></script>
</body>
</html>