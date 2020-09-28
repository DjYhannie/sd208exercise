<?php
   require "./helpers.php";
    $fields = [ "firstname" , "lastname", "mail" ,"address"];
    $values = [];
    $errors = [];

    for ($i=0; $i < sizeof($fields); $i++) {  //sizeof get array length
        $field = $fields[$i]; // form name
        $value =  getVal($field); // form values

        if (compareString($field,"firstname" )|| compareString ( $field, "lastname")) {
            $valid = checkNameLength( $field , $value);
            if ( $valid !="ok") {
                array_push($errors  , $valid);
            }
        } 

        if (compareString($field,"mail")) {
            if (!checkEmail($value)) {
                array_push($errors  , "Invalid email"); //array_push insert element into the array
            }
        } 
        $values[$field] = $value;

    }

    // display
    if (sizeof($errors) > 0 ) {
        print_r($errors);
    }else{
        print_r($values);
    };

?>