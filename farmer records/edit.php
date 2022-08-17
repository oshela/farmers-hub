<?php
include "db.php";
error_reporting (E_ALL ^ E_NOTICE); 
 if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $user_location = $_GET['location'];
    $query = "select * from $user_location WHERE id = $user_id";
    $select_user_by_id = mysqli_query($conn, $query);
    
    while( $row = mysqli_fetch_assoc($select_user_by_id)){
    $id = $row['id'];
    $farmer_name = $row['farmer_name'];
    $phone_number = $row['Phone_No'];
    $sex = $row['Sex'];
    $location = $row['farmer_location'];
    $education = $row['Edu_Qual'];
    $age = $row['Age'];
    $farmsize = $row['Farm_Size'];
    $tomato = $row['Tom'];
    $sz = $row['Sz'];
    $potato = $row['Pot'];
    $sz_1 = $row['Sz_1'];
    $onions = $row['Ons'];
    $sz_2 = $row['Sz_2'];
    $chilli_pepper = $row['Chi_P'];
    $sz_3 = $row['Sz_3'];
    $bell_pepper = $row['Bell_P'];
    $sz_4 = $row['Sz_4'];
    $cucumber = $row['Cocb'];
    $sz_5 = $row['Sz_5'];
    $others = $row['Others'];
    $sz_6 = $row['Sz_6'];
    $total = $row['Total'];
   
    }
        }
    
    if(isset($_POST['update_user'])){

          
            $farmer_name = $_POST['name'];
            $farmer_phonenumber = $_POST['phonenumber'];
            $farmer_sex = $_POST['sex'];
            $farmer_location = $_POST['location'];
            $farmer_education = $_POST['education'];
            $farmer_age = $_POST['age'];
            $farmsize = $_POST['farmsize'];
            $farmer_tomato = $_POST['tomato'];
            $sz = $_POST['sz'];
            $potato = $_POST['potato'];
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
    
    
    $query = "UPDATE $user_location  SET farmer_name = '$farmer_name', Phone_No = '$farmer_phonenumber', ";
    $query .= "Sex = '$farmer_sex', farmer_location = '$farmer_location', Edu_Qual = '$farmer_education', ";
    $query .= "Age = '$farmer_age', Farm_Size = '$farmsize', Tom = '$farmer_tomato', Sz = '$sz', Pot = '$potato',  ";
    $query .= "Sz_1 = '$sz_1', Ons = '$onion', Sz_2 = '$sz_2', Chi_P = '$chillipepper', Sz_3 = '$sz_3',  ";
    $query .= "Bell_P = '$bellpepper', Sz_4 = '$sz_4', Cocb = '$cucumber', Sz_5 = '$sz_5', Others = '$other',  ";
    $query .= "Sz_6 = '$sz_6', Total = '$total'";
    $query .= "WHERE id =  $user_id ";

    
    $update_query = mysqli_query($conn, $query);
    if(!$update_query){
        die("error occured".mysqli_error($conn));
        exit();
    }else{
        header("Location:".$_SERVER[HTTP_REFERER]);
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
        <h1>Edit</h1>
    
    <form action="" method="POST" enctype = "multipart/form-data">
    
    <div class="form-group">
                    <label for="name">FARMER NAME:</label><br>
                    <input type = "text" value = "<?php echo $farmer_name ; ?>"class = "form-control" name= "name">
    
    </div>    
    <div class="form-group">
                    <label for="title">PHONE NUMBER:</label><br>
                    <input type = "text"value = "<?php echo $phone_number  ?>" class = "form-control" name= "phonenumber">
    
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
                    <input type = "text"value = "<?php echo $location  ?>" class = "form-control" name= "location">
    
    </div>
    <div class="form-group">
                    <label for="title">EDUCATION:</label><br>
                    <input type = "text"value = "<?php echo $education  ?>" class = "form-control" name= "education">
    
    </div>
    <div class="form-group">
                    <label for="title">AGE:</label><br>
                    <input type = "text"value = "<?php echo $age  ?>" class = "form-control" name= "age">
    
    </div>
    <div class="form-group">
                    <label for="title">FARMSIZE:</label><br>
                    <input type = "text"value = "<?php echo $farmsize  ?>" class = "form-control" name= "farmsize">
    
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
                    <input type = "text"value = "<?php echo $sz  ?>" class = "form-control" name= "sz">
    
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
                    <input type = "text"value = "<?php echo $sz_1  ?>" class = "form-control" name= "sz_1">
    
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
                    <input type = "text"value = "<?php echo $sz_2  ?>" class = "form-control" name= "sz_2">
    
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
                    <input type = "text"value = "<?php echo $sz_3 ?>" class = "form-control" name= "sz_3">
    
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
                    <input type = "text"value = "<?php echo $sz_4  ?>" class = "form-control" name= "author">
    
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
                    <input type = "text"value = "<?php echo $sz_5  ?>" class = "form-control" name= "sz_5">
    
    </div>
    <div class="form-group">
                    <label for="title">OTHER:</label><br>
                    <input type = "text"value = "<?php echo $others  ?>" class = "form-control" name= "other">
    
    </div>
    <div class="form-group">
                    <label for="title">SZ_6:</label><br>
                    <input type = "text"value = "<?php echo $sz_6  ?>" class = "form-control" name= "sz_6">
    
    </div>
    <div class="form-group">
                    <label for="title">TOTAL:</label><br>
                    <input type = "text"value = "<?php echo $total  ?>" class = "form-control" name= "total">
    
    </div>
    <div class="form-group">
               
                <input type = "submit"name= "update_user" value = "Edit">

</div>

</form>
