<?php 
session_start();
$_SERVER['HTTP_REFERER'];

include_once "config.php";
if (isset($_GET["num_id"]) ) {
    $num_id = $_GET["num_id"];

    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="crmn";

    $connection = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "DELETE FROM personnels WHERE num_id=$num_id";
    $connection->query($sql);
    
}
header("location: config.php");
header("location:" . $_SERVER['HTTP_REFERER']);
exit;


?>
