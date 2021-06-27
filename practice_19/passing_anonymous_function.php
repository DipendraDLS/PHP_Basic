<?php
    // Anonymous Function
    Function disp($a_fun){
        return $a_fun(); //anonymous function call
    }

    //passing anonymous function as an  argument.
    echo disp(Function(){
                return "Dipendra";
    });

?>
