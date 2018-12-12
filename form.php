<?php

if(isset($_POST['submit']))
{
    $name = array("Edwin", "Student", "Peter", "Samid", "Maria", "Jane", "Jack");
    $minimun = 5;
    $maximun = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimun )
    {
        echo "<h1>Username has to be longer than five</h1>";
    } elseif(strlen($username) > $maximun )
    {
        echo "<h1>Username cannot be longer than 10</h1>";
    }

    if(!in_array($username,$name))
    {
        echo "Sorry!You are not allowed.";
    } else{
        echo "Welcome!";
    }


    // echo "Hello " . $username . "<br />";
    // echo "Your password is " . $password;
    
}

?>



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



<form action="form.php" method="post">

    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">

</form>



</body>
</html>