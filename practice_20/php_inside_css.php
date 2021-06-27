<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP inside CSS</title>
</head>
<body>
    <?PHP
        $a = "Dipendra";
        echo "<h1 style='color:red;'>Welcome $a</h1>";

        echo "<input type='text' value='Username' style= 'color:red;'><br/>";
        echo "<input type='text' value=$a style='text-align:center; color:red;'>";
    ?>
    
</body>
</html>