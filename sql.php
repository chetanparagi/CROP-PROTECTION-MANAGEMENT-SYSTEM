<?php
    // connect to database
$servername="localhost";
$username="root";
$password="9482038504";
$dbname="agriculture_portal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
    if(!$conn){

        echo 'Connection error' . mysqli_connect_error();
    } 
?>



