<?php
session_start();

// Clear session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header('Location: connexion.php');
exit();
?>
