<?php
$con=new mysqli('localhost', 'root', '', 'crmn');


if ($con){
    echo"vous etes connectée";

}else{
    die(mysqli_error($con));
}
?>