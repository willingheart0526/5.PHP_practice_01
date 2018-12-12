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


function say_Somtihing()
{

    echo "Hello Student, do you like the class? yes? okay great!";

}

say_Somtihing();
echo '<br />';

function calculate()
{
    echo 456 + 345;
}

function it()
{

    say_Somtihing();
    echo '<br />';
    calculate();

}

it();

?>

</body>
</html>