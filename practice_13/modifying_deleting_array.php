<?php

    // modifying array
    $name[0]= "Ram";
    echo $name[0];
    $name[0]= "PHP";
    echo "<br/>",$name[0];

    //deleting array using unset function
    $name[0]="Hari";
    echo"<br/>". $name[0];

    $name[0]=" "; //this is not the way of deleting.
    echo"<br/>". $name[0];

    unset($name[0]); //this is the proper way of deleting the array
    echo"<br/>". $name[0]; // here error is produced as $name with index 0 has been deleted using unset function.
    
?>