
<?php

session_start();


require 'config.php';

?><!DOCTYPE html>
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
    <title>Modification des informations personnelles</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
     <!----===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<style>


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
            <h1>Modification de vos informations personnelles</h1>

           
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>

                </button>
                
               

            </div>
            <div class="info-container">
                <form action="config.php" method="post">
                <?php include('errors.php') ;?>
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Détails personnels</span>
        
                            <div class="fields">
                                <div class="input-field">
                                    <label>Nom et Prénom</label>
                                    <input type="text" name="nom" placeholder="Entrer votre nom et prénom" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Age</label>
                                    <input type="number" name="age" placeholder="Entrer votre age" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Entrer votre email" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Cellulaire</label>
                                    <input type="number" name="tel" placeholder="Entrer numéro tel" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Sexe</label>
                                    <select name="sexe" required>
                                        <option disabled selected>Selectionnez une option</option>
                                        <option value="homme">Homme</option>
                                        <option value="femme">Femme</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
        
                                <div class="input-field">
                                    <label>Profession</label>
                                    <input type="text" name="profession" placeholder="Entrer votre profession" required>
                                </div>
                            </div>
                        </div>
        
                        <div class="details ID">
                            <span class="title">Détails d'identité</span>
        
                            <div class="fields">
                                <div class="input-field">
                                    <label>Type ID</label>
                                    <input type="text" name="type_id" placeholder="Entrer type ID" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Numéro ID</label>
                                    <input type="number" name="num_id" placeholder="Entrer numéro ID" required>
                                </div>
                                
                                <div class="input-field">
                                    <label>Situation familiale</label>
                                    <select name="situ_fam"required>
                                        <option disabled selected>Selectionnez une option</option>
                                        <option value="celibataire">Célibataire</option>
                                        <option value="marie">Marié(e)</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <label>Nombre d'enfants</label>
                                    <input type="number"  name="nbr_enf" placeholder="Entrer un nombre" required>
                                </div>
                            </div>
        
                            <button class="nextBtn">
                                <span class="btnText">Suivant</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div> 
                    </div>
        
                    <div class="form second">
                        <div class="details address">
                            <span class="title">Détails d'adresse</span>
        
                            <div class="fields">
                                <div class="input-field">
                                    <label>Type d'adresse</label>
                                    <input type="text" name="type_adr" placeholder="Permanente ou Temporaire" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Pays</label>
                                    <input type="text" name="pays" placeholder="Entrer votre pays" required>
                                </div>
        
                                <div class="input-field">
                                    <label>ville de résidence</label>
                                    <input type="text" name="ville" placeholder="Entrer votre ville" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Adresse et rue</label>
                                    <input type="text" name="adr" placeholder="Enter votre adresse " required>
                                </div>
        
                                <div class="input-field">
                                    <label>Code postal</label>
                                    <input type="number" name="code" placeholder="Entrer le code" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Délégation</label>
                                    <input type="text" name="delegation" placeholder="Entrer commune" required>
                                </div>
                            </div>
                        </div>
        
                        
        
                    
        
                            <div class="buttons">
                                <div class="backBtn">
                                    <i class="uil uil-navigator"></i>
                                    <span class="btnText">Précédent</span>
                                </div>
                                

                                <button class="sumbit" name="profile_user">
                                        <a href="espace.php">
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
