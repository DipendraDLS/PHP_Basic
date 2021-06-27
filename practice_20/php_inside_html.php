<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP inside HTML</title>
</head>
<body>
    <?PHP
        $a = "Dipendra";
        echo "<h1>Welcome $a</h1>";

        echo "<input type='text' value='Username'><br/>";
        echo "<input type='text' value=$a>";
    ?>
    
</body>
</html>