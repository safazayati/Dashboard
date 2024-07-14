<?php
session_start();

// initializing variables
$pseudo = "";
$email    = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'crmn');

// REGISTER USER
if (isset($_POST['confirmer'])) {
  // receive all input values from the form
  $nom_salle = mysqli_real_escape_string($db, $_POST['nom_salle']);
  $nom_depart = mysqli_real_escape_string($db, $_POST['nom_depart']);
  $date_res = mysqli_real_escape_string($db, $_POST['date_res']);
  $heure_debut = mysqli_real_escape_string($db, $_POST['heure_debut']);
  $heure_fin = mysqli_real_escape_string($db, $_POST['heure_fin']);
  $nom = mysqli_real_escape_string($db, $_POST['nom']);




// Vérification de la disponibilité de la salle pour la réservation
$query = "SELECT * FROM reservation WHERE nom_salle = '$nom_salle' AND date_res = '$date_res' 
          AND heure_debut <= '$heure_fin' AND heure_fin >= '$heure_debut'";
$result = $db->query($query);

if ($result->num_rows > 0) {
    // La salle est déjà réservée à cette heure
    
    echo '<h3 class ="message my-3 text-center bg-dark text-white rounded-lg p-3 center">La salle est déjà réservée à cette heure. Veuillez choisir une autre heure.</h3>';
} else {
    // Ajout de la réservation dans la base de données
    $insertQuery = "INSERT INTO reservation (nom_salle, date_res, heure_debut, heure_fin, nom_depart, nom) 
                    VALUES ('$nom_salle', '$date_res', '$heure_debut', '$heure_fin', '$nom_depart', '$nom')";

    if ($db->query($insertQuery) === TRUE) {
        // La réservation a été effectuée avec succès
        
        echo '<h3 class ="message my-3 text-center bg-dark text-white rounded-lg p-3 center">La réservation a été effectuée avec succès.</h3>';
    } else {
        // Erreur lors de l'ajout de la réservation
        
        echo '<h3 class ="message my-3 text-center bg-dark text-white rounded-lg p-3 center">Erreur lors de la réservation :</h3>'.$db->error;
        
    }
}
}

// Fermeture de la connexion à la base de données
$db->close();
    
?>