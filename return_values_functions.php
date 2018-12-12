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

function addNumbers($number1, $number2)
{

    $sum = $number1 + $number2;
    return $sum;

}

$result = addNumbers(34,64);

echo $result . '<br />';

$result = addNumbers(100, $result);

echo $result;

?>

</body>
</html>