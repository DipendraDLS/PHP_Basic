<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> HTML inside PHP</title>
</head>
<body>

    <h1>Handling Password with <u>HTML inside PHP </u>. </h1>
    
    <?php
       if ($_REQUEST['pass']== 'password'){
           echo "<b>Welcome! you have sucessfully login.</b>"; //html tag inside the php.
       } 
       else{
           echo "Password you have typed :". $_REQUEST['pass']. " is incorrect. Try again!!";
       }

    ?>
</body>
</html>