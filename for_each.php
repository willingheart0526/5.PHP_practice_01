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

$numbers = array(345,397,676,385,2657,5784);

foreach($numbers as $number){

echo $number . '<br />';

}

foreach($numbers as $key => $number){

    echo $key . ' ： ' . $number . '<br />';
    
}



?>


</body>
</html>