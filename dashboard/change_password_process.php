<?php

session_start();


include('server.php');
    if(isset($_GET['code'])) {
        $code = $_GET['code'];

        

        $verifyQuery = $db->query("SELECT * FROM utilisateur WHERE code = '$code'");

        if($verifyQuery->num_rows == 0) {
            header("Location: connexion.php");
            exit();
        }

        if(isset($_POST['confirmer'])) {
            $email = $_POST['email'];
            $new_password = $_POST['password_1'];

            $changeQuery = $db->query("UPDATE utilisateur SET password = '$new_password' WHERE email = '$email' and code = '$code'");

            if($changeQuery) {
                header("Location: success.php");
            }
        }
        $db->close();
    }
   
?>