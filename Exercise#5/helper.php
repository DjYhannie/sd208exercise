<?php

session_start();

$bmi = $output = "";
$error  = array('weight' =>'' , 'height' => '' );

if (isset($_POST['submit'])) { 
$mass = $_POST['mass'];
$height = $_POST['height'];

if($mass == ""){
    echo "<script> alert('Invalid Input!')</script>";
}
elseif ($height == "") {
    echo "<script> alert('Invalid Input!')</script>";
}
else{


    function bmi($mass,$height) {
        $bmi = $mass/($height/100)**2;
        return $bmi;
        } 
        $bmi = bmi($mass,$height);
        if ($bmi <= 18.5) {
        $output = " Under Weight";
        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "Normal Weight";
        } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "Over Weight";
        } else if ($bmi > 30.0) {
        $output = "OBESE";
        }
        $err = false;
        foreach($error as $key => $value){
            if($value != ""){
                $err = true;
            break;
            }
        }
            if(!$err){
                $_SESSION['input'] = array($bmi, $output);
                header("location: result.php");
            }
            else{
                //print_r($error);
            }
}

}

if(isset($_POST['submit1'])){
    header("location:bmi.php");
}


?>