<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php

$counter = 0;

while($counter < 10){
    
    echo "Hello Student" . "<br />";

    $counter++;

}

$counter_1 = 0;

while($counter_1 <= 10){
    
    echo $counter_1 . "<br />";
    $counter_1++;
}


?>

</body>
</html>