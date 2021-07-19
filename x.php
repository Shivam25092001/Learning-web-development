<?php

if(isset($_POST['id'])){                           

    //defaults for initialisng the database table (use as it is...)
    $server = "localhost";
    $username = "root";
    $con = mysqli_connect($server, $username, "");
    if(!$con){
        die("connection to database failed due to" .mysqli_connect_error());

    }
    echo("successful connecting");




    //assigning form input values entered by the user to variables
    $id = $_POST['id'];
    $message = $_POST['message'];

    //inserting values into the database
    $sql = "INSERT INTO `user registeration`.`login` (`id`, `message`) VALUES ('$id', '$message');"; 
    echo $sql;

    if($con->query($sql) == true){
        echo "success";
    }
    else{
        echo "ERROR: $sql <br> <b>$con->error</b>";
    }


    //defaults (use as it is...)
    $con->close();
}
?>


<!-- base html code for page ...-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post" >
    <fieldset>
    <legend>Contact us:</legend>
        <p>Enter your name: </p>
        <input type="text" name="id">
        <br>
        <p>Enter message: </p>
        <input type="text" name="message">
        <br>
        <input type="submit">
    </fieldset>
    </form>
</body>
</html>