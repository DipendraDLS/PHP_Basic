<?php

    // foreach with associative array
    $name = array('Rahul'=> 500, 'Sonam'=> 600, 'Sumit' => 700, 'Priti'=> 800);

    foreach ($name as $key => $value):
        # code...
        echo $key . " = ". $value. '<br/>';
    endforeach;

?>