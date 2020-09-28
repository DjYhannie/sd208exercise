 <?php

    function getVal($field)
    { 
      return  $_POST[$field]  ; // isset($_POST[$field]) ? $_POST[$field] : $field. " is empty";
    }

    function checkNameLength( $field , $name) {
        if (strlen($name)<2) { // get length of the string
           return "$field is too short";
        }elseif (strlen($name)>25) {
           return "$field is too long";
        }
        return "ok";
    }

    function checkEmail($email) {
       $emailFormat = "/\S+@\S+\.\S+/";
       return preg_match($emailFormat, $email); // for checking format regex php
    }

    function compareString($str1 , $str2){
        return $str1 == $str2;
    }
?>