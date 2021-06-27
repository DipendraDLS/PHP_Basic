<?php
    //for each in numeric array

    //first method without using $key=> 
    
    
    foreach ($name as $value) {
        # code...
        echo $value. '<br/>';
    }

    //second method with $key=>
    foreach ($name as $key => $value):
        # code...
        echo $key . " ". $value. '<br/>';
    endforeach;

?>