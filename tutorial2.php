<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial2</title>
</head>
<body> 
<?php
    echo "<pre>";
    for ($i = 1; $i < 8; $i++) {
        for ($j = $i; $j < 8; $j++)
            echo "&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--)
            echo ("&nbsp;*");
        echo "<br>";
    }
    $n = 8;
    for ($i = 8; $i > 0; $i--) {
        for ($j = $n - $i; $j > 0; $j--)
            echo "&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--)
            echo ("&nbsp;*");
        echo "<br>";
    }
    echo "</pre>";
?>
</body>
</html>
