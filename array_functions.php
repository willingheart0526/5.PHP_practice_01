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

$list = [343,34,456,785,232,456,435];

echo max($list);

echo "<br />";

echo min($list);

echo "<br />";


print_r($list);

echo "<br />";

sort($list);

print_r($list);

?>

</body>
</html>