<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
echo "username is $username";
if($username == "" || $email== "" || $password == "")
{
    echo "Please enter all details";
}

else
{
    mysql_connect("localhost","root","");
    mysql_select_db("movie");
    $query="INSERT INTO users(name, email, password) VALUES('$username', '$email', '$password')";
    mysql_query($query);
    header("Location:index.php");
    
    }

?>