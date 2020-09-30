<?php

include("helper.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <style>
        body{
            background-image: url("https://cdn3.vectorstock.com/i/1000x1000/52/47/abstract-medical-background-with-health-care-icons-vector-20945247.jpg");
             background-size: cover; 
            background-repeat: no-repeat;
            position: fixed;
        }
        .whole img{
            height: 600px;
            margin-top: 20%;
        }
        .content{
            background-color: pink;
            margin-top: -120%;
            margin-left: 100%;
            width: 90%;
            height: 310px;
            box-sizing: content-box;
            border-radius: 4px;
            border: 7px solid  hsl(330, 91%, 50%);
        }
        h1{
            color: red;
            padding-top: 10px;
            margin-left: 35%;
        }
        .btn1{
            margin-left: 45%;
            margin-top: 13%;
            font-size: 20px;
            height: 35px;
            width: 50%;
            box-sizing: border-box;
            border-radius: 5px;
            background-color: #6b0f1a;
            background-image: linear-gradient(315deg, #6b0f1a 0%, #b91372 74%);
        }
        
        .btn1:hover{
            box-shadow: 0 0 5px #f403b8, 0 0 25px#f403b8, 0 0 50px #f403b8,
        0 0 100px #f403b8;
        }
        .bmi{
            margin-left: 10px;
            color: rgb(174, 11, 238);
        }
        .output{
            margin-left: 10px;
            padding-top: 10px;
            color: rgb(174, 11, 238);

        }
    </style>
</head>
<body>
    <div class="whole">
    <img src="./img/img.png" alt="">
    <div class = "content">
    <form action="" method="post">
        <h1>Result:</h1>
        
        <h2 class="bmi">Your BMI is: <?php echo $_SESSION['input'][0];?></h2>
        <h2 class="output"> Current Health Status: <?php  echo $_SESSION['input'][1]?></h2>
        <input type="submit" class="btn1" name="submit1" value="Compute Again">
        </form>
    </div>
    </div>
    
    
</body>
</html>