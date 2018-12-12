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

$number = array('juanita', 'maria', 'jose');

print_r($number);

echo $number[2] . "<br>";

$names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz');

print_r($names);

echo "<br>" . $names['first_name'] . " " . $names['Last_Name'];

?>

</body>
</html>