<?php

session_start();



include('server.php');
    if(isset($_POST['forgot-password-btn'])) {
        $email = $_POST['email'];
    }
    else {
        exit();
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  
    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'benabdallahhela34@gmail.com';                     // SMTP username
        $mail->Password   = 'txxpeepxnygzoxmw';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('benabdallahhela34@gmail.com', 'Administration');
        $mail->addAddress($email);     // Add a recipient

        $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reinitialisation du mot de passe';
        $mail->Body    = ' Bonjour,
   
          
        Pour renouveler votre mot de passe, cliquez <a href="http://localhost/authentification/dashboard/change_password.php?code='.$code.'">ici </a>';

      

        $verifyQuery = $db->query("SELECT * FROM utilisateur WHERE email = '$email'");


        if($verifyQuery->num_rows) {
            $codeQuery = $db->query("UPDATE utilisateur SET code = '$code' WHERE email = '$email'");
                
            $mail->send();
           
            echo '<h3 class ="message my-3 text-center bg-dark text-white rounded-lg p-3 center">Le message a été envoyé, vérifiez votre email.</h3>';
        } else {
            
            echo '<h3 class ="message my-3 text-center bg-dark text-white rounded-lg p-3 center"> Vérifiez votre email.</h3>';

            
        }
        $db->close();
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
        
    }    
?>
