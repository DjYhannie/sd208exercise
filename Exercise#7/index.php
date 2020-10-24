<?php

include ("connect.php");

if(isset($_POST['Submit'])){
    $sql = "INSERT INTO data(firstname,lastname,email,password) VALUES ('". $firstName."','".$lastName."','".$email."','".$pass."')";
        

    if(mysqli_query($conn,$sql)){
        echo "";
        header("location: output.php");
    }else{
        echo "Error: " .$sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>

<style>
    body{
        background:black;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-image: url("https://www.technocrazed.com/wp-content/uploads/2015/12/black-wallpaper-to-set-as-background-1.jpg");
        background-size: cover;
        background-repeat: no-repeat;

    }
    .container{
        width: 400px;
        padding: 40px;
        top: 50%;
        left: 50%;
        margin-left: 28%;
        background-image: url("https://www.technocrazed.com/wp-content/uploads/2015/12/black-wallpaper-to-set-as-background-1.jpg");
        text-align: center;
        transition: 0.25s;
        margin-top: 70px;
        border-radius: 10px;
    }
    .containerHeader h1 {
        color: white;
        text-transform: uppercase;
        font-size: 40px;
        
    }
    .containerBody p {
        color: rgb(168, 163, 163);
        font-size: 20px;
    }
    .username{
        color: white;
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #f00cab;
        padding: 10px 10px;
        width: 250px;
        font-size: 16px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s
    }
    .username:focus{
        width: 300px;
        border-color: yellowgreen;
    }
    .userlast{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #f00cab;
        padding: 10px 10px;
        width: 250px;
        font-size: 16px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s
    }
    .userlast:focus{
        width: 300px;
        border-color: fuchsia;
    }
    .mail{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #f00cab;
        padding: 10px 10px;
        width: 250px;
        font-size: 16px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s
    }
    .mail:focus{
        width: 300px;
        border-color: yellow;
    }
    .pass{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #f00cab;
        padding: 10px 10px;
        width: 250px;
        font-size: 16px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s
    }
    .pass:focus{
        width: 300px;
        border-color: rgb(230, 62, 32);
    }
    .submit{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #f00cab;
        padding: 14px 40px;
        outline: none;
        color: white;
        font-size: 18px;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer
    }
    .submit:hover{
        background: #f00cab;
        
    }
    


</style>
    
</head>

<body>
    ?>
    <form action="" method="POST">
        <div class="container">
            <div class="containerHeader">
                <h1>Register</h1>
            </div>
            <div class="containerBody">
                <p> Please fill the information needed!</p> 
                <input class="username" type="text" name="firstname" placeholder="Firstname" required="true"> 
                <input class="userlast" type="text" name="lastname" placeholder="Lastname" required="true">
                <input class="mail" type="email" name="email" placeholder="Email" required="true">
                <input class="pass" type="password" name="password" placeholder="Password" required="true"> 
                <!-- <a href="output.php" class="submit" type="submit" name = "Submit" value = "Login"> -->
                <input class = "submit" type="submit" name="Submit"   value="Register">
            </div>
    
        </div>
    
    </form>
    
</body>

</html>