<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="index.css">
<style>
    .holiday-container {
        width: 600px;
        height: 330px;
        justify-content: center;
        align-items: center;
        perspective: 800px;
        transform: translateX(-1350px);
        width: 600px ;
        margin: 480px 0;
    }

.holiday-container:hover > .holiday-card {
  cursor: pointer;
  transform: rotateY(180deg);
}

.holiday-card {
  height: 100%;
  width: 100%;
  position: relative;
  transition: transform 1500ms;
  transform-style: preserve-3d;
}

.holiday-front,

.holiday-front {
  height: 100%;
  width: 100%;
  border-radius: 2rem;
  box-shadow: 0 0 5px 2px rgba(50, 50, 50, 0.25);
  position: absolute;
  backface-visibility: hidden;
  background: #fff;
  
}

 .holiday-front h5{

 margin: -2px;
 font-size: 1em;
 color: #98c9ff;
 font-weight: 300;
 margin: 8px 0;
 transform: translateX(250px);
}
 .holiday-front h3{
    
    right: 9px;
    font-size: 1em;
    color: #7CB9E8;
    z-index: 1;
    transform: translateX(250px);
    align-content: center;
}



.holiday-back {
  height: 100%;
  width: 100%;
  border-radius: 2rem;
  box-shadow: 0 0 5px 2px rgba(50, 50, 50, 0.25);
  position: absolute;
  backface-visibility: hidden;
  
}
.holiday-back h5{
 margin: -2px;
 font-size: 1em;
 color: #98c9ff;
 font-weight: 300;
}
.holiday-back h3{
    right: 9px;
    font-size: 1em;
    color: #7CB9E8;
    z-index: 1;
}
.chart-container{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    transform: translateX(-20px);
    margin: 15px;
}
.chart{
    padding: 2rem;
    border: 1px solid #f49131;
    border-radius: 1rem;
    background: #fff;
    box-shadow: 0 0 16px rgba(0, 0, 0, 0.8);
}







.holiday-back {
  background-color:#fff;
  transform: rotateY(180deg);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 1rem;
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
                <div>
                    <img src="/images/bell.png" alt="">
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
            <h1>Tableau de bord</h1>

            <div class="date">
                 <input type="date">              
            </div>

            <div class="Insights">

                 <!---------END OF COLLABORATIONS------------>
                 
                 <!---------END OF PROJETS------------>
                

                 <!---------END OF VISITEURS------------>



            </div>
     <div class="chart-container">
        <div class="chart">
            <canvas id="barchart" width="450" height="290"></canvas>
        </div>
            <div class="chart">
            <canvas id="doughnut" width="300" height="280"></canvas>
            </div>
            <div class="chart">
            <canvas id="pie" width="300" height="280"></canvas>
            </div>
        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        const ctx = document.getElementById('barchart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Informatique', 'Mécanique', 'Eléctronique', 'Mécatronique', 'Microélectornique'],
    datasets: [{
      label: '# Les spécialitées',
      data: [12, 19, 3, 5, 2, 3],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(153, 102, 255, 0.2)'
    ],
    borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(153, 102, 255, 1)'
    ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
const ctx2 = document.getElementById('doughnut');

new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: ['Ingénieurs', 'Ingénieur de recherche', 'Enseignant-Chercheur', 'Chercheur', 'Maitre assistant', 'Technicien de labo', 'Enseignant', 'doctorant'],
    datasets: [{
      label: '# Les catégories',
      data: [12, 19, 3, 5, 2, 3, 5, 6],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(153, 102, 255, 0.2)'
    ],
    borderColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 206, 86, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 206, 86, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(153, 102, 255, 0.2)'
    ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
const ctx3 = document.getElementById('pie');

new Chart(ctx3, {
  type: 'pie',
  data: {
    labels: ['Femme', 'Homme'],
    datasets: [{
      label: '# Genre distinction',
      data: [50, 40],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(153, 102, 255, 0.2)'
    ],
    borderColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(153, 102, 255, 0.2)'
    ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
   
        </main>
        <!--------- END OF MAIN------------>

        <div class="right">
       
    
<div class="holiday-container">
    <div class="holiday-card">
    <div class="holiday-front">
    <h3>Jour de l'an</h3>
    <h5>1 janv. 2023</h5>
    <h3>Fête de l'Indépendance</h3>
    <h5>20 mars 2023</h5>
    <h3>Journée des Martyrs</h3>
    <h5>9 avr. 2023</h5>
    <h3>Aïd el-Fitr</h3>
    <h5>21-23 avr. 2023</h5>
    <h3>Fête du Travail</h3>
    <h5>1 mai 2023</h5>
    <h3>Aïd al-Adha</h3>
    <h5>28 juin 2023</h5>
 </div>
 
    <div class="holiday-back">
    <h3>Nouvel an musulman</h3>
    <h5>18 juil 2023</h5>
    <h3>Fête de la République</h3>
    <h5>25 juil. 2023</h5>
    <h3>Journée de la femme</h3>
    <h5>13 aout 2023</h5>
    <h3>Mawlid</h3>
    <h5>26 sept. 2023</h5>
    <h3>Jour de l'évacuation</h3>
    <h5>15 oct. 2023</h5>
</div>
</div>
</div>


    <script src="./index.js"></script>
    
</body>
</html>