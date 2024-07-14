<?php

session_start();



if(!empty($_POST['submit']));
{
     $conges = $_POST['conges'];
     $raison = $_POST['raison'];
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
     $date_emission = $_POST['date_emission'];

     require("fpdf185/fpdf.php");

     $pdf = new FPDF();
     $pdf -> AddPage();
     $pdf->Image('fpdf185/logotn.png',95,5,20,20);

     $pdf -> SetFont("Arial","B",8);
     $pdf->SetXY(10, 10);
     $pdf->Write(0, "Republique Tunisienne");
     $pdf->SetXY(10, 20);
     $pdf->Write(0, "Ministere de l'Enseignement Superieur et de la");
     $pdf->SetXY(10, 30);
     $pdf->Write(0, "Recherche Scientifique");




     $pdf -> SetFont("Arial","B",8);
     $pdf->SetXY(140, 10);
     $pdf->Write(0, "Centre de recherche en microelectronique");
     $pdf->SetXY(160, 20);
     $pdf->Write(0, "et nanotechnologie");
     $pdf->SetXY(150, 30);
     $pdf->Write(0, "Pole technologique a Sousse");

    


     
     $pdf -> SetFont("Arial","B",18);
     $pdf->SetXY(75, 40);
     $pdf->Write(0, 'Demande de Conges');
     $pdf -> SetFont("times","B",12);
     $pdf->SetTextColor(0, 0, 0);
     $pdf->SetXY(20, 70);
     $pdf->Write(0, 'Type  : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $conges);
     $pdf->SetXY(20, 80);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Si conges exceptionnel,veuillez saisier la raison : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $raison);
     $pdf->SetXY(20, 90);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Identifiant Unique : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $matricule);
     $pdf->SetXY(20, 100);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Nom et Prenom : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $nom);
     $pdf->SetXY(20, 110);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Rang ou Classe : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $rang);
     $pdf->SetXY(20, 120);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Plan de carriere : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $plan);
     $pdf->SetXY(20, 130);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'La structure administrative : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $structure);
     $pdf->SetXY(20, 140);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Interet : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $interet);
     $pdf->SetXY(20, 150);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, "Lieu d'affectation : ");
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $lieu);
     $pdf->SetXY(20, 160);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Debut duree : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $debut);
     $pdf->SetXY(20, 170);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Fin duree : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $fin);
     $pdf->SetXY(20, 180);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, "l'adresse de la residence pendant le conges : ");
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $adresse);
     $pdf->SetXY(20, 190);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Code postal : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $code);
     $pdf->SetXY(20, 200);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Cellulaire : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $number);
     $pdf->SetXY(20, 210);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Documents necessaires : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $doc);
     $pdf->SetXY(130, 250);
     $pdf -> SetFont("times","B",12);
     $pdf->Write(0, 'Sousse, le : ');
     $pdf -> SetFont("times","I",11);
     $pdf->cell(0,0, $date_emission);
     $pdf-> output();

}
?>

