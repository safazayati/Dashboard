<?php
session_start();

$pseudo = "";
$email = "";
$errors = array();

$conn = new mysqli("localhost", "root", "", "crmn");

if (isset($_POST['reservation'])) {
    $matricule_voit = mysqli_real_escape_string($conn, $_POST['matricule_voit']);
    $num_demande = mysqli_real_escape_string($conn, $_POST['num_demande']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $date_debut_mission = mysqli_real_escape_string($conn, $_POST['date_debut_mission']);
    $objet_mission = mysqli_real_escape_string($conn, $_POST['objet_mission']);
    $date_fin_mission = mysqli_real_escape_string($conn, $_POST['date_fin_mission']);
    $nom_et_prenom = mysqli_real_escape_string($conn, $_POST['nom_et_prenom']);
    $nbr_j = mysqli_real_escape_string($conn, $_POST['nbr_j']);
    $motif = mysqli_real_escape_string($conn, $_POST['motif']);
    $date_depart = mysqli_real_escape_string($conn, $_POST['date_depart']);

    $sql = "INSERT INTO demande_vehicule (matricule_voit, num_demande, destination, date_debut_mission, objet_mission, date_fin_mission, nom_et_prenom) 
        VALUES ('$matricule_voit', '$num_demande', '$destination', '$date_debut_mission', '$objet_mission', '$date_fin_mission', '$nom_et_prenom' )";
    mysqli_query($conn, $sql);

    $query = "INSERT INTO autorisation_sortie (nbr_j, motif, date_depart)
        VALUES ('$nbr_j', '$motif', '$date_depart')";
    mysqli_query($conn, $query);
}

header("location:" . $_SERVER['HTTP_REFERER']);
?>