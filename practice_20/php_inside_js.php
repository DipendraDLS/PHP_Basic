<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP inside JS</title>
</head>
<body>
    <?PHP
        echo "<script>alert('Error')</script>";
        echo "<script>prompt('Error')</script>";
        echo "<script>confirm('Error')</script>";
    ?>
    
</body>
</html>