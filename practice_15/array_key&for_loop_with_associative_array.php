<?php
    $fees = array('Rahul' =>500 , 'Shyam'=> 600 );
    $keys= array_keys($fees); // stores only the keys of an associative array in an numeric array.

    for ($i=0; $i < count($keys) ; $i++) { 
        # code...
        echo $keys[$i] . "=". $fees[$keys[$i]]. "<br/>"; 
    }

?>