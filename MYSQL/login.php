<?php

if(isset($_POST['submit']))
{
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection)
    {
        echo "We are connect";
    } else{

        die("Database connection failed");

    }




    // if($username && $password)
    // {

    //     echo $username;
    //     echo $password;

    // } else{

    //     echo "this field cannot be blank";

    // }



}




?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>


<div class="container">

    <div class="col-sm-6">
    
        <form action="login.php" method="post">

            <div class=form-group>
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class=form-group>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    
    </div>




</div>


</body>
</html>