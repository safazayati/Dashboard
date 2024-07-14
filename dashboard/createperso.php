<?php 

session_start();

$errors = array(); 
$errors = array(); 



$db = mysqli_connect('localhost', 'root', '', 'crmn');

header("location:" . $_SERVER['HTTP_REFERER']);

if (isset($_POST['create'])) {
    $nom  = $_POST["nom"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $sexe = $_POST["sexe"];
    $profession = $_POST["profession"];
    $type_id = $_POST["type_id"];
    $num_id = $_POST["num_id"];
    $situ_fam = $_POST["situ_fam"];
    $nbr_enf = $_POST["nbr_enf"];
    $type_adr = $_POST["type_adr"];
    $pays = $_POST["pays"];
    $ville = $_POST["ville"];
    $adr = $_POST["adr"];
    $code_postal = $_POST["code_postal"];
    $delegation = $_POST["delegation"];
    
       
            $query = "INSERT INTO personnels (nom, age, email, tel, sexe, profession, type_id, num_id, situ_fam, nbr_enf,
             type_adr, pays, ville, adr, code_postal, delegation )  VALUES('$nom', '$age', '$email', '$tel', '$sexe', '$profession', '$type_id', '$num_id', '$situ_fam', '$nbr_enf',
                '$type_adr', '$pays', '$ville', '$adr', '$code_postal', '$delegation' )";
                mysqli_query($db, $query);
               
        
            

   
}

?>