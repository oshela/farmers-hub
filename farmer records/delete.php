<?php
include "db.php";

if(isset($_GET['delete'])){
$delete= $_GET['delete'];
$location= $_GET['location'];
$query = "DELETE FROM $location WHERE id= {$delete} ";
$delete_query = mysqli_query($conn, $query);
if(!$delete_query){
    die("error occured".mysqli_error($conn));
    exit();
}
header("location: index.php");
    
}





?>