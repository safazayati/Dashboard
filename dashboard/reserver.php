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
    <title>Réserver une voiture</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
    <style>


/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.info-container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}


.info-container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.info-container form .details{
    margin-top: 10px;
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
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
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
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.info-container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
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
                <span class="material-icons-sharp">local_parking</span>
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
            <h1>Réserver une voiture</h1>
            
        
    <div class="info-container">
        <form action="reservation.php" method="post">
        
            <div class="form first">
                <div class="details demande vehicule">
                    <span class="title">Détails demande véhicule </span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Matricule</label>
                            <input type="text" name="matricule_voit" placeholder="Entrer la matricule" required>
                        </div>
                        <div class="input-field">
                            <label>Numéro demande</label>
                            <input type="number" name="num_demande" placeholder="Entrer numero demande" required>
                        </div>
                        <div class="input-field">
                            <label>Destination</label>
                            <input type="text" name="destination" placeholder="Entrer votre destination" required>
                        </div>
                        <div class="input-field">
                            <label>Date début mission</label>
                            <input type="date"  name="date_debut_mission" placeholder="Entrer date debut" required>
                        </div>
                        <div class="input-field">
                            <label>Objet de la mission</label>
                            <input type="text" name="objet_mission" placeholder="Entrer l'objet de la mission" required>
                            
                        </div>
                        <div class="input-field">
                            <label>Date fin mission</label>
                            <input type="date" name="date_fin_mission" placeholder="Entrer une date de fin de mission" required>
                        </div>
                        <div class="input-field">
                            <label>Nom et prénom</label>
                            <input type="text" name="nom_et_prenom" placeholder="Entrer votre nom et prénom" required>
                        </div>
                    </div>
                </div>
                
                
                    <button class="nextBtn">
                        <span class="btnText">Suivant</span>
                        <i class="uil uil-navigator"></i>
                    </button>
               
            </div>
            <div class="form second">
                <div class="Autorisation sortie ">
                    <span class="title">Détails Autorisation sortie</span>
                    <div class="fields">
                    <div class="input-field">
                            <label>Numéro ID</label>
                            <input type="number" name="num_id" placeholder="Entrer le numero id" required>
                        </div>
                        <div class="input-field">
                            <label>Nombre de jours</label>
                            <input type="number" name="nbr_j" placeholder="Entrer le nombre de jour" required>
                        </div>
                        <div class="input-field">
                            <label>Motif de sortie</label>
                            <input type="text" name="motif" placeholder="Entrer votre motif" requred>
                        </div>
                        <div class="input-field">
                            <label>Date départ</label>
                            <input type="date" name="date_depart" placeholder="Entrer la date depart" required>
                        </div>
                        
                        
                    </div>
                </div>
                
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigaator"></i>
                            <span class="btnText">Précédent</span>
                        </div>
                        
                        <button class="sumbit" name="reservation">
                       
                            <span class="btnText">Confirmer</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div> 
            
            </div>
        </form>
    </div>

        
        
        </main>
        <!--------- END OF MAIN------------>

    
            <!---------END OF TOP------------>
            
         
        </div>

    </div>
<script src="./index.js"></script>
<script>
        const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


        nextBtn.addEventListener("click", ()=> {
         allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
</script>
</body>
</html>