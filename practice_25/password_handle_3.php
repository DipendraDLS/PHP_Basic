<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP inside HTML</title>
</head>
<body>
    <h1>Handling Password with <u>PHP inside HTML </u>. </h1>
     
    <?php 
        if ($_REQUEST['pass']== 'password') { ?>  <!-- upto here PHP part-->
        
            <p>Welcome! you have sucessfully login.</p>  <!-- This one is the html part-->
    
        <?php } //closing bracket of 'if' statement.
    
         else { ?> <!--Here PHP is closed. Even for the single closing bracket to be closed we have to open PHP becz it's of PHP part & else 
                        has to be defined within this PHP we can't define it by opening PHP separately-->

            <p>Password you have typed : <?php echo $_REQUEST['pass'] ?> is incorrect. Try again!!</p> <!-- PHP inside HTML-->
        
         <?php }?>  <!--closing of else statement. Even for the single closing bracket to be closed we have to open PHP becz it's of PHP part  -->
            


    



</body>
</html>