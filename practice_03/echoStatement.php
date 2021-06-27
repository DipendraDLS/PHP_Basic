<?php
    echo "<b> echo with HTML Tag</b> <br/>";
    echo "<b>". "echo with HTML Tag along with dot concatenation"."</b>". "<br/>";
    echo "<b>", "echo with HTML Tag along with comma concatenation","</b>","<br/>";
    echo "<u><h1>echo with  HTML 'u' Tag and 'h1' Tag</h1></h1></u>";

    echo"Now echo with Variable<br/>";
    $value1=10;
    $value2= 20;
    $sum= $value1 + $value2;
    echo $value1."<br/>";
    echo $value2."<br/>";
    echo "Sum = ". $value1 ."+". $value2 ."=". $sum. "<br/>"; //concatenation with dot.

    echo "echo with bracket:". ($value1+$value2) . "<br/>";
    echo "<b> echo with bracket and Html tag : </b>". ($value1+$value2) . "<br/>";
    
    echo"<br/><br/>";
    
    echo"Now echo with String <br/>";
    $name = "Dipen";
    echo "<b>Welcome Home</b> : ". $name;

?>