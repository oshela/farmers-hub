<?php
include "db.php";

if(isset($_POST["find"])){
        
    $crop = $_POST["crop"];
    $location = $_POST["Location"];
    $Farm_size = $_POST["Farmsize"];
            if($crop==='Tomato'){
                $query= "SELECT * FROM $location  WHERE Tom=1 &&  farm_size BETWEEN $Farm_size ";
                $result= mysqli_query($conn,$query);
                if(!$result){
                    die("error occured".mysqli_error($conn));
                    exit();
                }
    }else if($crop==='Potato'){
                    $query= "SELECT * FROM $location  WHERE Potato=1 &&  farmsize BETWEEN $Farm_size ";
                    $result= mysqli_query($conn,$query);
                    if(!$result){
                        die("error occured".mysqli_error($conn));
                        exit();
                    }
            }else if($crop==='Onion'){
                    $query= "SELECT * FROM $location  WHERE Onion=1 &&  farmsize BETWEEN $Farm_size ";
                    $result= mysqli_query($conn,$query);
                    if(!$result){
                        die("error occured".mysqli_error($conn));
                        exit();
                    }

            }else if($crop==='chilli_pepper'){
                    $query= "SELECT * FROM $location  WHERE chilli_pepper=1 &&  farmsize BETWEEN $Farm_size ";
                    $result= mysqli_query($conn,$query);
                    if(!$result){
                        die("error occured".mysqli_error($conn));
                        exit();
                    }
            }else if($crop==='bell_pepper'){
                    $query= "SELECT * FROM $location  WHERE bell_pepper=1 &&  farmsize BETWEEN $Farm_size ";
                    $result= mysqli_query($conn,$query);
                    if(!$result){
                        die("error occured".mysqli_error($conn));
                        exit();
                    }
            }else if($crop==='Cucumber'){
                    $query= "SELECT * FROM $location  WHERE Cucumber=1 &&  farmsize BETWEEN $Farm_size ";
                    $result= mysqli_query($conn,$query);
                    if(!$result){
                        die("error occured".mysqli_error($conn));
                        exit();
                    }
            }else if($crop==='Others'){
                    $query= "SELECT * FROM $location  WHERE Others=1 &&  farmsize BETWEEN $Farm_size ";
                    $result= mysqli_query($conn,$query);
                    if(!$result){
                        die("error occured".mysqli_error($conn));
                        exit();
                    }
            }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search results</title>
    <style>
           .header{
            margin:0;
            padding:0;
            background:linear-gradient(95.54deg, #6013ab 0.2%, #46008B 38.18%, #1B2095 94.08%); 
            height:10vh;
            color:whitesmoke;
            text-align:center;
            border-radius:20px;

           }
           h1{
            margin-top:5px;
           }
           table {
            margin-top:2%;
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            text-align: left;
            padding: 6px;
            }
            .a-tag{
               margin-top:10px;
               display:flex;
               justify-content:right;
            }
            a{
                text-decoration:none;
            }

            tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body>
    <div class="header">
        <h1>SEARCH RESULTS</h1>
    </div>
   <div class="a-tag"> <a href="add.php">ADD RECORD</a></div>
<table class="tble">
        <tr>
            <th> Name</th>
            <th>Phone_No</th>
            <th>Sex</th>
            <th>Location</th>
            <th>Edu_Qual</th>
            <th>Age</th>
            <th>Farm_Size</th>
            <th>Tom</th>
            <th>Sz</th>
            <th>Pot</th>
            <th>Sz_1</th>
            <th>Ons</th>
            <th>Sz_2</th>
            <th>Chi_P</th>
            <th>Sz_3</th>
            <th>Bell_P</th>
            <th>Sz_4</th>
            <th>Cocb</th>
            <th>Sz_5</th>
            <th>Others</th>
            <th>Sz_6</th>
            <th>Total</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        //fetching user sign-outs
        while( $row = mysqli_fetch_assoc($result)){
             $id=$row['id'];
                echo "<tr>";
            
                echo "<td>".$row['farmer_name']."</td>";
                echo "<td>".$row['Phone_No']."</td>";
                echo "<td>".$row['Sex']."</td>";
                echo "<td>".$row['farmer_location']."</td>";
                echo "<td>".$row['Edu_Qual']."</td>";
                echo "<td>".$row['Age']."</td>";
                echo "<td>".$row['Farm_Size']."</td>";
                echo "<td>".$row['Tom']."</td>";
                echo "<td>".$row['Sz']."</td>";
                echo "<td>".$row['Pot']."</td>";
                echo "<td>".$row['Sz_1']."</td>";
                echo "<td>".$row['Ons']."</td>";
                echo "<td>".$row['Sz_2']."</td>";
                echo "<td>".$row['Chi_P']."</td>";
                echo "<td>".$row['Sz_3']."</td>";
                echo "<td>".$row['Bell_P']."</td>";
                echo "<td>".$row['Sz_4']."</td>";
                echo "<td>".$row['Cocb']."</td>";
                echo "<td>".$row['Sz_5']."</td>";
                echo "<td>".$row['Others']."</td>";
                echo "<td>".$row['Sz_6']."</td>";
                echo "<td>".$row['Total']."</td>";
                echo "<td><a href='edit.php?user_id={$id}&location={$location}'>Edit</a></td>";
                echo "<td><a onclick=\" javascript: return confirm('are you sure you want to delete?');\" href='delete.php?delete={$id}&location={$location}'>delete</a></td>";
                echo "</tr>";      
                }
     ?>
    </table>
</body>
</html>