<?php
    // returning the anonymous function.

    function disp(){
        return function(){
                return "Hello I am Anonymous Function";
        };
    }

    $a = disp();   // $ a ma anonymous function store vayeko huncha.
    echo $a(); //Anonymous Function call
?>