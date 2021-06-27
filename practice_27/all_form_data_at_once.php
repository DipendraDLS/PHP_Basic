<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retrieve Form Data at Once. </title>
</head>
<body>
        <h1>Retrieve Form Data at Once. </h1>

        <?php
            foreach($_REQUEST as $key => $value){
                
                if(is_array($value)){
                 
                    foreach($value as $data){
                        echo $key . " = ". $data ."<br>";
                    }
                }
                else{
                    echo $key ." = ". $value. "<br>";
                }
            }

        ?>
    
</body>
</html>