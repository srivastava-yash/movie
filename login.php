<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == "")
{
    echo "Please enter all details";
}

else
{
    
    mysql_connect("localhost","root","");
    mysql_select_db("movie");
    $query="SELECT * FROM users WHERE name='$username' && password='$password'";
    $result = mysql_query($query);
    $con = mysql_num_rows($result);
    if($con!=0)
    {
        $_SESSION['name']=$username;
        header("Location:welcome.php");
    }
    else 
    {
        header("Location:register.php");
    }

}
    



?>