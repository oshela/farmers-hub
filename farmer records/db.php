<?php
//database connection
$server = "localhost";
$username = "root";
$password = "";
$db = "farm";
$conn = mysqli_connect($server , $username ,$password , $db);
if(!$conn){
    die("error in database connection").mysqli_error($conn); 

}
?>