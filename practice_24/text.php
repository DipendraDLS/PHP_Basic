<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEXT</title>
</head>
<body>

    <span style="color:red;">Your Name is: </span> 
    <span style="color:blue;">
            <?php echo $_REQUEST['name']?>  <!-- PHP inside HTML-->
    </span> 
    
</body>
</html>