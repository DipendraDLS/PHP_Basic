<?php
    /* Spaceship Operator <=> is new  operator in PHP Version 7 */

    echo "PHP version:" . PHP_VERSION ."<br/>";    
    

    //returns -1 as num1 is less than num2
    $num1 = 1;
    $num2=10;
    echo $num1<=> $num2;  
 
    //returns 0 as num1 is equal to num2
    $num1 = 10;
    $num2= 10;
    echo $num1<=>$num2;

    //returns 1 as num 1 is greater than num2 
    $num1 = 10;
    $num2= 5;
    echo $num1<=>$num2;


    //string can also be compared as same as above
    //this returns 1 as  num1 is greater than num2 as in alphabetical order.
    $num1 = "b";
    $num2= "a";
    echo $num1<=>$num2;

?>