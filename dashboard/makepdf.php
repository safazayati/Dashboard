<?php
require_once __DIR__ . '/vendor/autoload.php';
//grab variables
 $matricule = $_POST['matricule'];
 $nom = $_POST['nom'];
 $rang = $_POST['rang'];
 $plan = $_POST['plan'];
 $structure = $_POST['structure'];
 $interet = $_POST['interet'];
 $lieu = $_POST['lieu'];
 $debut = $_POST['debut'];
 $fin = $_POST['fin'];
 $adresse = $_POST['adresse'];
 $code = $_POST['code'];
 $number = $_POST['number'];
 $doc = $_POST['doc'];
 $option = $_POST['option'];

 //create new pdf instance
  $mpdf = new \Mpdf\Mpdf();
  

  //create our pdf

   $data = '';

$data .= '<1> Demande de congés</h1>';
  //add data
  $data .='<strong>  Type de congés choisit : </strong>' .$option .'<br/>';
  $data .='<strong> Matricule : </strong>' .$matricule .'<br/>';
  $data .='<strong> Nom et Prénom : </strong>' .$nom .'<br/>';
  $data .='<strong> Rang ou classe : </strong>' .$rang .'<br/>';
  $data .='<strong> Plan de carriére : </strong>' .$plan .'<br/>';
  $data .='<strong> La stricture administrative</strong>' .$structure .'<br/>';
  $data .='<strong> Intérét : </strong>' .$interet .'<br/>';
  $data .='<strong> Lieu affectation : </strong>' .$lieu .'<br/>';
  $data .='<strong> Début durée</strong>' .$debut .'<br/>';
  $data .='<strong> Fin durée : </strong>' .$fin .'<br/>';
  $data .='<strong> Adresse de la résidence pendant le congés : </strong>' .$adresse .'<br/>';
  $data .='<strong> Code postal : </strong>' .$code .'<br/>';
  $data .='<strong> Téléphone : </strong>' .$number .'<br/>';
  $data .='<strong> Documents nécessaires : </strong>' .$doc .'<br/>';
 //write pdf
 $mpdf->WriteHTML($data);
 //output to browser
 $mpdf->Output('myfile.pdf', 'D');  
?>