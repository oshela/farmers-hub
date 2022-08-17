<?php
include "db.php";
    if(isset($_POST['add_record'])){
        $farmer_zone = $_POST['zone'];
        $farmer_name = $_POST['name'];
        $farmer_phonenumber = $_POST['phonenumber'];
        $farmer_sex = $_POST['sex'];
        $farmer_location = $_POST['location'];
        $farmer_education = $_POST['education'];
        $farmer_age = $_POST['age'];
        $farmsize = $_POST['farmsize'];
        $farmer_tomato = $_POST['tomato'];
        $sz = $_POST['sz'];
        $farmer_potato = $_POST['potato'];
        $sz_1 = $_POST['sz_1'];
        $onion = $_POST['onion'];
        $sz_2 = $_POST['sz_2'];
        $chillipepper = $_POST['chillipepper'];
        $sz_3 = $_POST['sz_3'];
        $bellpepper = $_POST['bellpepper'];
        $sz_4 = $_POST['sz_4'];
        $cucumber = $_POST['cucumber'];
        $sz_5 = $_POST['sz_5'];
        $other = $_POST['other'];
        $sz_6 = $_POST['sz_6'];
        $total = $_POST['total'];

    $check_query= "SELECT Phone_No FROM $farmer_zone WHERE Phone_No IN ($farmer_phonenumber)";
    $validate_query = mysqli_query($conn, $check_query);
  if(!$validate_query){
    $query = "INSERT INTO $farmer_zone (farmer_name, Phone_No, Sex, farmer_location, Edu_Qual, Age, Farm_Size, Tom,
    Sz, Pot, Sz_1, Ons, Sz_2, Chi_P, Sz_3, Bell_P,
    Sz_4, Cocb, Sz_5, Others, Sz_6, Total) VALUES('$farmer_name', '$farmer_phonenumber', '$farmer_sex', '$farmer_location', '$farmer_education', '$farmer_age', '$farmsize', '$farmer_tomato', 
    '$sz', '$farmer_potato', '$sz_1', '$onion', '$sz_2', '$chillipepper', '$sz_3', '$bellpepper', 
    '$sz_4', '$cucumber', '$sz_5', '$other', '$sz_6', '$total')";
        $add_farmer_query = mysqli_query($conn, $query);
        if(!$add_farmer_query){
            die("error occured".mysqli_error($conn));
            exit();
        }
    }else{
        echo '<script>
        window.alert("THIS PHONE NUMBER HAS ALREADY BEE REGISTERED!");
        </script>';;
    }
 
        }
    
    
     
    ?> 
    <style>
        body{
            color:white;
            padding:10px;
            margin:10px;
            background:linear-gradient(95.54deg, #6013ab 0.2%, #46008B 38.18%, #1B2095 94.08%);
        }
        form{
            width:100%;
            margin-left:25%;
      
        }
        form select{
            margin:2px;
            width:50%;
            height:8vh;
            border-radius:10px;
        }
        form input{
            margin-top:1%;
            width:50%;
            width:50%;
            height:8vh;
            border-radius:10px;
            padding:5px;
            border: 1px solid #3399ff;

        }
        input[type=submit]{
            color:white;
            background-color:#3399ff;
            border: 1px solid #3399ff;
            border-radius:10px;

        }
        label{
            font-size:20px;
            color: white;
            text-align:start;
        }
        h1{
            text-align:center;
        }

    </style>
    <body>
        <h1>ADD RECORD</h1>
    
    <form action="" method="POST" enctype = "multipart/form-data">
    <div class="form-group">
                    <label for="name">FARMER ZONE:</label><br>
                    <select name="zone" id="">
                        <option value="Barkin Ladi">Barkin Ladi</option>
                        <option value="Bassa">Bassa</option>
                        <option value="Bokkos">Bokkos</option>
                        <option value="jos_east">Jos East</option>
                        <option value="jos_north">Jos North</option>
                        <option value="jos_south">Jos South</option>
                        <option value="Mangu">Mangu</option>
                        <option value="Pankshin">Pankshin</option>
                        <option value="Riyom">Riyom</option>
                        <option value="Other">Other</option>
                    </select>
    
         </div> 
    <div class="form-group">
                    <label for="name">FARMER NAME:</label><br>
                    <input type = "text" class = "form-control" name= "name">
    
    </div>    
    <div class="form-group">
                    <label for="title">PHONE NUMBER:</label><br>
                    <input type = "text" class = "form-control" name= "phonenumber">
    
    </div>
    <div class="form-group">
                    <label for="title">SEX:</label><br>
                    <select name="sex" id="">
                        <option value="M">MALE</option>
                        <option value="F">FEMALE</option>
                    </select>
    
    </div>
    <div class="form-group">
                    <label for="title">FARM LOCATION:</label><br>
                    <input type = "text" class = "form-control" name= "location">
    
    </div>
    <div class="form-group">
                    <label for="title">EDUCATION:</label><br>
                    <input type = "text" class = "form-control" name= "education">
    
    </div>
    <div class="form-group">
                    <label for="title">AGE:</label><br>
                    <input type = "text" class = "form-control" name= "age">
    
    </div>
    <div class="form-group">
                    <label for="title">FARMSIZE:</label><br>
                    <select name="farmsize" id="">
                        <option value="0">0 or less hecters</option>
                        <option value="1">1 hecters </option>
                        <option value="2">2 hecters</option>
                        <option value="3">3 hecters</option>
                        <option value="4">4 hecters</option>
                        <option value="5">5 hecters</option>
                        <option value="6">6 hecters</option>
                        <option value="7">7 hecters</option>
                        <option value="8">8 hecters</option>
                        <option value="9">9 hecters</option>
                        <option value="10">10+ hecters</option>
                        <option value="Other">Other</option>
                    </select>
    
    </div>
    <div class="form-group">
                    <label for="title">TOMATO:</label><br>
                    <select name="tomato" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                   </select>
    
    </div>
    <div class="form-group">
                    <label for="title">TOMATO FARMSIZE:</label><br>
                    <input type = "text" class = "form-control" name= "sz">
    
    </div>
    <div class="form-group">
                    <label for="title">POTATO:</label><br>
                    <select name="potato" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                   </select>
    
    </div>
    <div class="form-group">
                    <label for="title">POTATO FARM SIZE:</label><br>
                    <input type = "text" class = "form-control" name= "sz_1">
    
    </div>
    <div class="form-group">
                    <label for="title">ONION:</label><br>
                    <select name="onion" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                   </select>
    
    </div>
    <div class="form-group">
                    <label for="title">ONION FARMSIZE:</label><br>
                    <input type = "text" class = "form-control" name= "sz_2">
    
    </div>
    <div class="form-group">
                    <label for="title">CHILLI PEPPER:</label><br>
                    <select name="chillipepper" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                   </select>
    
    </div>
    <div class="form-group">
                    <label for="title">CHILLI PEPPER FARMSIZE:</label><br>
                    <input type = "text" class = "form-control" name= "sz_3">
    
    </div>
    <div class="form-group">
                    <label for="title">BELL PEPPER:</label><br>
                    <select name="bellpepper" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                   </select>
    
    </div>
    <div class="form-group">
                    <label for="title">BELL PEPPER FARMSIZE:</label><br>
                    <input type = "text" class = "form-control" name= "sz_4">
    
    </div>
    <div class="form-group">
                    <label for="">CUCUMBER:</label><br>
                   <select name="cucumber" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                   </select>
    
    </div>
    <div class="form-group">
                    <label for="title">CUCUMBER FARMSIZE:</label><br>
                    <input type = "text" class = "form-control" name= "sz_5">
    
    </div>
    <div class="form-group">
                    <label for="title">OTHER:</label><br>
                    <input type = "text" class = "form-control" name= "other">
    
    </div>
    <div class="form-group">
                    <label for="title">SZ_6:</label><br>
                    <input type = "text" class = "form-control" name= "sz_6">
    
    </div>
    <div class="form-group">
                    <label for="title">TOTAL:</label><br>
                    <input type = "text" class = "form-control" name= "total">
    
    </div>
    <div class="form-group">
                <input type = "submit"name= "add_record" value = "ADD RECORD">

</div>

</form>
