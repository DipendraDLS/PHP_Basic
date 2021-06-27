<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Detail Collection.</h1>

    <?php 
        if (isset($_REQUEST['name']) && isset($_REQUEST['roll'])){
            echo "Form has been Submitted!!<br>";
            echo "Name:". $_REQUEST['name']."<br>";
            echo "Roll:". $_REQUEST['roll']."<br>";
            
        } else { ?>
            <form action="" method="POST">
                Name: <input type="text" name="name"><br><br>
                Roll: <input type="text" name="roll"><br><br>
                <input type="submit" value="submit">
            </form>

        
        <?php } ?>
</body>
</html>