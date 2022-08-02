<?php


$server = "localhost";
$user = "root";
$pass = "";
$db = "reg_db";


$con = mysqli_connect($server, $user, $pass, $db);

if($con){
    echo "congulaturation";
    
}
else{
    echo "Ntibigerayo" .mysqli_connect($con);
}

?>