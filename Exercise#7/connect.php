<?php

// Create Connection
$conn =  mysqli_connect('localhost','root','','info');
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());

}

if (isset($_POST['Submit'])){

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

   

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //     if (empty($_POST['firstname'])) {
    //       $fnameErr = "Firstname is required";
    //     } else {
    //       $fname = test_input($_POST['firstname']);
    //     }
    // }
    

}


?>
