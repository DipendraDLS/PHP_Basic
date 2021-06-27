<?php
    /*
        Syntax of define() function:

        define("Constant_varaible_name", Value, Case_insensitive)  by default Case_insensitive is false.


    */

    define("PI",3.1415); // case insensitive is false by default.
    echo PI; // This must be same as it is defined in constant name.


    define("pi",3.1415, TRUE); // case_insensitive is TRUE. we can use any one as PI , pi , Pi, pI
    echo "<br/>".pi;
    echo "<br/>".PI;
    echo "<br/>".pI;
    echo "<br/>".Pi;

    define("cons",3.1415, TRUE);

    // cons = 1.15; // we can't change the value of constant like this we have to change it at the define() function if needed.
    echo "<br/>".cons; 

?>
