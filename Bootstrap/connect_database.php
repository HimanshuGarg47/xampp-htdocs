<?php

$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$connect = mysqli_connect($servername,$username,$password);


if(!$connect)
{
    die("Sorry! WE are unable to connect" . mysqli_connect_error());

}
else{
    echo "Connection was successful <br>";
}

$query = "CREATE DATABASE db1";
$result = mysqli_query($connect,$query);

if($result)
{
    echo "database connected successfully <br>";
}
else{  
    echo "The result is " .  var_dump($result) . "<br>" . mysqli_error($connect);
}

?>