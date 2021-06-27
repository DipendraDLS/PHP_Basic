<?php
    if (isset($_REQUEST['submit'])){
        $username= $_REQUEST['uname'];
        $password= $_REQUEST['pass'];

        if(strlen($username)<=8){
            echo "<span style='color :red;'>Username must be more than 8 character long.</span><br>";

            if(strlen($password)<=8){
                echo "<span style='color :red;'>Password must be more than 8 character long.</span>";
            }   
            
        }
        else{
            header('location:login.php');
        }

    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Simple Form Validation.</h1>
    
    <form action="" method="POST">
        username:<input type="text" name="uname"><br><br>
        password:<input type="password" name="pass"><br><br>
        <input type="submit" value="Submit" name="submit";>
    </form>

</body>
</html>