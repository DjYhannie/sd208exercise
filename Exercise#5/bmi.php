<?php
include("helper.php")
?>

<!DOCTYPE html>
<html>

<head>
    <title>bmi.com</title>
    <style>
        body {

            background-image: url(https://cdn3.vectorstock.com/i/1000x1000/56/67/the-science-and-mathematics-abstract-background-vector-11335667.jpg);
            background-size: cover;
            background-repeat: no-repeat;

        }

        .content {
            background-color: #fc5296;
            background-image: linear-gradient(315deg, #fc5296 0%, #f67062 74%);
            width: 30%;
            margin-top: 13%;
            margin-left: 34%;
        }

        .content h1 {
            color: #001f3f;
            text-align: center;
            padding-top: 2px;

        }

        .mass {
            color: crimson;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 18px;
            font-weight: bold;
            margin-left: 10px;
            padding: 10px;
        }

        .mass .box1 {
            margin: 20px 20px;
            width: 80%;
            height: 40px;
            font-size: large;
            box-sizing: border-box;
            border: 4px solid #8842d5;
            border-radius: 5px;
            padding: 15px 10px;
        }
        .height{
            color: crimson;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 18px;
            font-weight: bold;
            margin-left: 10px;
            padding: 10px;
        }
        .height .box2{
            margin: 20px 20px;
            width: 80%;
            height: 40px;
            font-size: large;
            box-sizing: border-box;
            border: 4px solid #8842d5;
            border-radius: 5px;
            padding: 15px 10px; 
        }
        .btn{
            height: 40px;
            width: 25%;
            margin-left: 35%;
            box-sizing: border-box;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color:  #8842d5;
            border: 4px solid  #8842d5;
            font-size: large;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <div class="bg-image"></div>
    <div class="content">
        <h1>BMI Calculator</h1>
        <form method="POST" action="">
            <div class="mass">
                <label for="mass"> Mass in kilogram (kg):</label><br>
                <input type="number" class="box1" name="mass" placeholder="Enter Body Mass">
            </div>
            <div class="height">
                <label for="height">Height in meter (m):</label><br>
                <input type="number" class="box2" name="height" placeholder="Enter Height">
            </div>
            <input type="submit" class="btn" name="submit" value="Submit">
    </div>
</body>

</html>