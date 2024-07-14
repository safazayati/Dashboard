<?php
session_start();
$pseudo = "";
$email    = "";
$errors = array(); 
$errors = array(); 



// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'crmn');

header("location:" . $_SERVER['HTTP_REFERER']);
if (isset($_POST['ajout'])) {
    $matricule_voit = mysqli_real_escape_string($db, $_POST['matricule_voit']);
    $marque = mysqli_real_escape_string($db, $_POST['marque']);
    $modele = mysqli_real_escape_string($db, $_POST['modele']);
    $num_cartegrise = mysqli_real_escape_string($db, $_POST['num_cartegrise']);
    $puissance =  mysqli_real_escape_string($db, $_POST['puissance']);
    $type_carburant = mysqli_real_escape_string($db, $_POST['type_carburant']);
    $designation = mysqli_real_escape_string($db, $_POST['designation']);
    $date_achat = mysqli_real_escape_string($db, $_POST['date_achat']);
    $date_circulation =  mysqli_real_escape_string($db, $_POST['date_circulation']);
    $nbr_place = mysqli_real_escape_string($db, $_POST['nbr_place']);
    $km_depart= mysqli_real_escape_string($db, $_POST['km_depart']);
    $num_certif= mysqli_real_escape_string($db, $_POST['num_certif']);
    $date_expiration  = mysqli_real_escape_string($db, $_POST['date_expiration']);
    if (count($errors) == 0) {
        $query = "INSERT INTO voiture (matricule_voit, marque, modele, num_cartegrise,
         puissance, type_carburant, designation, date_achat, date_circulation, nbr_place,
         km_depart) 
         VALUES('$matricule_voit', '$marque', '$modele', '$num_cartegrise', '$puissance',
          '$type_carburant', '$designation', '$date_achat', '$date_circulation', '$nbr_place',
            '$km_depart' )";
            mysqli_query($db, $query);
    }
    if (count($errors) == 0) {
        $sql = "INSERT INTO certificat_visitetech (num_certif	, matricule_voit, date_expiration) 
        VALUES('$num_certif', '$matricule_voit', '$date_expiration')";
        mysqli_query($db, $sql);
    }
    



        
}



?>