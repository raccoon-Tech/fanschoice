<?php
// declaration of varables
$servername="localhost";
$username="root";
$password="";
$dbname="fanschoice";

// create connection
$conn = new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_error()){
    die("connection failed: " . mysqli_connect_error() );
}
// echo "connected sucessfully";
?>