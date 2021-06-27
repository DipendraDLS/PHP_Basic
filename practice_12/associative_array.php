<?php
    //without using array function
    $name["Ram"]= 500;
    $name["Shyam"]= 600;
    $name["Hari"]= 700;
    $name["Sita"]= 800;

    echo "Value of Ram is: ". $name["Ram"]."<br/>";
    echo "Value of Shyam is: ". $name["Shyam"]."<br/>"; // using concatetnation to print 
    echo "Value of Hari is: {$name["Hari"]}<br/>"; //using string interpolation method to print.

    //using array function & double arrow operator.
    $name = array('Ram' =>  500, 'Shyam' => 600);
    echo "Value of Ram is: {$name["Ram"]}<br/>";
    echo "Value of Shyam is: {$name["Shyam"]}<br/>";


?>