<?php
    //creating an array
    $marks= array(10,20,30,40);

    //function definition
    function total($subject)  //here $subject will also be of array type.
    {

        $sum=0;
        foreach ($subject as $num):
            # code...   
            $sum = $sum + $num;
        endforeach;
        return $sum;
    }

    echo total($marks); // passing $marks array to the function total.
?>