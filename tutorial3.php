<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial3</title>
</head>
<body>

<?php
    $birthDate="29-10-1999";
    $currentDate=date("d-m-Y");
    $age=date_diff(date_create($currentDate),date_create($birthDate));
    echo "Your current age is " .$age->format("%y"). " years and " .$age->format("%m"). " months and " .$age->format("%d"). ' days.';
?>

</body>
</html>