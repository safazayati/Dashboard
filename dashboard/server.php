<?php


// initializing variables
$pseudo = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'crmn');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  //$pseudo = mysqli_real_escape_string($db, $_POST['pseudo']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_retype = mysqli_real_escape_string($db, $_POST['password_retype']);
  $user_type = $_POST['user_type'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($pseudo)) {  echo ' <h3 class ="message my-3 text-center bg-white text-black rounded-lg p-3 center">Le pseudo est recquis!</h3>'; }
  if (empty($email)) {  echo ' <h3 class ="message my-3 text-center bg-white text-black rounded-lg p-3 center">email est recquis!</h3>'; }
  if (empty($password)) {  echo ' <h3 class ="message my-3 text-center bg-white text-black rounded-lg p-3 center">Le mot de passe est recquis!</h3>'; }
  if ($password != $password_retype) {  echo ' <h3 class ="message my-3 text-center bg-white text-black rounded-lg p-3 center">Les deux mot de passe ne correspondent pas!</h3>'; }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM utilisateur WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    

    if ($user['email'] === $email) {
      {  echo ' <h3 class ="message my-3 text-center bg-white text-black rounded-lg p-3 center">email existe déjà!</h3>'; }
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);// chiffrer le mot de passe avant de l'enregistrer dans la base de données
  	$query = "INSERT INTO utilisateur (email, password, user_type) 
  			  VALUES( '$email', '$password','$user_type')";
  	$result= mysqli_query($db, $query);
    header('Location: connexion.php');
   
	
  }

}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "L'adresse e-mail est requise");
  }
  if (empty($password)) {
    array_push($errors, "Le mot de passe est requis");
  }
    // Assuming the login is successful and user data is retrieved from the database
   $email = mysqli_real_escape_string($db, $_POST['email']);
    $password =  mysqli_real_escape_string($db, $_POST['password']);
   $user_type = $_POST['user_type'];
    
    // Store the user ID and username in the session
  $_SESSION['email'] = $email;
   $_SESSION['password'] = $password;
   $_SESSION['user_type'] = $user_type;
  
  

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM utilisateur WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $user = mysqli_fetch_assoc($results);
      $user_type = $user['user_type'];

      if ($user_type == 'user') {
        // Connexion réussie en tant qu'utilisateur
        $_SESSION['email'] = $email;
        $_SESSION['user_type'] = $user_type;
        header('Location: usertableau.php');
      } elseif ($user_type == 'admin') {
        // Vérifier si l'utilisateur avec l'e-mail est un utilisateur et non un administrateur
        $user_check_query = "SELECT * FROM utilisateur WHERE email='$email' AND user_type='user' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user_exists = mysqli_fetch_assoc($result);

        if ($user_exists) {
          array_push($errors, "Vous ne pouvez pas vous connecter en tant qu'administrateur avec cet e-mail.");
        } else {
          // Connexion réussie en tant qu'administrateur
          $_SESSION['email'] = $email;
          $_SESSION['user_type'] = $user_type;
          header('Location: tableau.php');
        }
      }
    } else {
      array_push($errors, "Combinaison e-mail/mot de passe incorrecte");
    }
  }
}


?>