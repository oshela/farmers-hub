<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer records</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            
        }
        h1{
            font-weight:300;
            color:white;
            text-align:center;
        }
        body{
            padding:10px;
            margin:10px;
            background:linear-gradient(95.54deg, #6013ab 0.2%, #46008B 38.18%, #1B2095 94.08%);
}
        
        .home{

            display:inline;
            justify-content:center;
            align-self:center;
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
            padding:5px;
            height:8vh;
            width:200px;
            color:white;
            background-color:#3399ff;
            border: 1px solid #3399ff;
            border-radius:10px;

        }
        img{
            margin-top:2%;
            margin-left:25%;
            width:50%;
            height:30vh;
            background-position:contain;
            border-radius:10px;
        }
        label{
            font-size:20px;
            color: white;
            text-align:start;
        }
        @media only screen and (max-width:600px){
            img{
                width:100%;
                margin-left:0;

            }
            form{
                margin-left:0;
            }
            form select{
                width:100%;
                margin:0;
            }
        }
    </style>
</head>
<body>
    <h1>FARMERS DATABASE</h1>
   <div class="home">
        <img src="farmers-record.JPEG" alt="">
        <form action="search.php" method="POST">
            <label for="crop">SELECT CROP:</label><br>
                    <select name="crop" id="">
                        <option value="Tomato">Tomato</option>
                        <option value="Potato">Potato</option>
                        <option value="Onion">Onion</option>
                        <option value="chilli_pepper">Chilli Pepper</option>
                        <option value="bell_pepper">Bell Pepper</option>
                        <option value="Cucumber">Cucumber</option>
                        <option value="Other">Others</option>
                    </select><br>
                    <label for="location">SELECT LOCATION:</label><br>
                    <select name="Location" id="">
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
                    </select><br>
                    <label for="farmsize">SELECT FARMSIZE:</label><br>
                    <select name="Farmsize" id="">
                        <option value="0 AND 1">0-1</option>
                        <option value="1 AND 2">1-2</option>
                        <option value="2 AND 3">2-3</option>
                        <option value="3 AND 4">3-4</option>
                        <option value="4 AND 5">4-5</option>
                        <option value="5 AND 6">5-6</option>
                        <option value="6 AND 7">6-7</option>
                        <option value="7 AND 8">7-8</option>
                        <option value="Other">Other</option>
                    </select><br>
                    <input name="find" type="submit" value="FIND RECORDS">
            </form>
   </div>
    
</body>
</html>