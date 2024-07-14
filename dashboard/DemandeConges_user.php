<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de congés</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
<style>
    .info-container{
    position: absolute;
    max-width: 900px;
    width: 100%;
    border-radius: 10px;
    padding: 40px;
    margin: 10px 0;
    transform: translateX(100px);
    background-color: #f2f2f2;
    box-shadow: 0 15px 20px rgba(0,0,0,0.5);
}

.info-container form{
    position: relative;
    margin-top: -40px;
    min-height: 490px;
    overflow: hidden;
}
.info-container form .form{
    position: absolute;
    background-color: #f2f2f2;
    transition: 0.3s ease;
}

.info-container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    background:#f2f2f2;

}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 9px 0;
    color: #000;
    border-radius: 30px;
    
    
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #000;
      
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
.info-container form .btnText{
    font-size: 14px;
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100px;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 20px 0;
    background-color: #98c9ff;
    transition: all 0.3s linear;
    cursor: pointer;
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
            <h1>Demande de congés</h1>
        <div class="info-container">
            <form action="demConge_user.php" method="post">
           
                <div class="fields">
                    <div class="input-field">  
                        <label>Choisissez une option : </label>             
                            <select name="conges" required >
                            <option  selected>Selectionnez une option</option>
                            <option value="annuel">Congés annuel</option>
                            <option value="compensatoire">Congés compensatoires</option>
                            <option value="accouchement">Congés accouchement</option>
                            <option value="maladie">Congés maladie</option>
                            <option value="maternite">Congés maternité</option>
                            <option value="exceptionnel">Congés exceptionnel</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Raison (Congés exceptionnel) : </label>
                        <input type="text" name="raison" placeholder="">
                    </div>
                    <div class="input-field">
                        <label>Matricule : </label>
                        <input type="number" name="matricule" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Nom et Prénom : </label>
                        <input type="text" placeholder="" name="nom"required>
                    </div>
                    <div class="input-field">
                        <label>Rang ou Classe : </label>
                        <input type="text" name="rang" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Plan de carrière : </label>
                        <input type="text"  name="plan" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>La structure administrative : </label>
                        <input type="text" name="structure" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Intérêt : </label>
                        <input type="text" name="interet"placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Lieu d'affectation :</label>
                        <input type="text" name="lieu"placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label> Début durée  : </label>
                        <input type="date"  name="debut"placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label> Fin durée  : </label>
                        <input type="date" name="fin" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>L'adresse de la résidence pendant le congés : </label>
                        <input type="text" name="adresse" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Code postal : </label>
                        <input type="number"name="code" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Cellulaire : </label>
                        <input type="number" name="number" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Document nécessaire : </label>
                        <input type="text" name="doc" placeholder=""required>
                    </div>
                    <div class="input-field">
                        <label>Sousse, le: </label>
                        <input type="date" name="date_emission" placeholder="" required>
                    </div>
                    
                    <button class="sumbit" name="submit">     
                        <span class="btnText">Envoyer</span>    
                        <i class="uil uil-navigator"></i>
                    </button> 
            </div>   
        </form>
            </div>

</div>
    
            
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


    
    <script src="./index.js"></script>
</body>
</html>