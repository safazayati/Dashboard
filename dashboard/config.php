<?php


$pseudo = "";
$email    = "";
$errors = array(); 
$errors = array(); 

// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'crmn');
//  EDIT PROFILE BUTTON
if (isset($_POST['profile_user'])) {
    // receive all input values from the form
    $nom = mysqli_real_escape_string($db, $_POST['nom']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);
    $sexe = $_POST['sexe'];
    $profession = mysqli_real_escape_string($db, $_POST['profession']);
    $type_id = mysqli_real_escape_string($db, $_POST['type_id']);
    $num_id = mysqli_real_escape_string($db, $_POST['num_id']);
    $situ_fam = $_POST['situ_fam'];
    $nbr_enf = mysqli_real_escape_string($db, $_POST['nbr_enf']);
    $type_adr = mysqli_real_escape_string($db, $_POST['type_adr']);
    $pays = mysqli_real_escape_string($db, $_POST['pays']);
    $ville = mysqli_real_escape_string($db, $_POST['ville']);
    $adr = mysqli_real_escape_string($db, $_POST['adr']);
    $code = mysqli_real_escape_string($db, $_POST['code']);
    $delegation = mysqli_real_escape_string($db, $_POST['delegation']);

    if (count($errors) == 0) {
    $query = "INSERT INTO personnels (nom, age, email, tel, sexe, profession, type_id, num_id, situ_fam, nbr_enf,
     type_adr, pays, ville, adr, code_postal, delegation ) 
     VALUES('$nom', '$age', '$email', '$tel', '$sexe', '$profession', '$type_id', '$num_id', '$situ_fam', '$nbr_enf',
        '$type_adr', '$pays', '$ville', '$adr', '$code', '$delegation' )";
        mysqli_query($db, $query);
        header('location: espace.php');
    }
}

?>