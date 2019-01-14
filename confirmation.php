<?php
session_start();
$x=$_POST['mname'];
$y=$_POST['hall'];
$z=$_POST['ticket'];
$a=$_SESSION['name'];
if($x=="" || $y=="" || $z==0)
{
    echo "Please fill all details";
    header("Location:booking.php");
}

else
{
    mysql_connect("localhost","root","");
    mysql_select_db("movie");
    $query = "UPDATE shows SET tickets=tickets-$z WHERE name='$x' && nameTheatre='$y'";
    mysql_query($query);
    $query2 = "INSERT INTO history(name, mname, ticket) VALUES('$a', '$x', $z)";
    mysql_query($query2);
    
    header("Location:done.php");
}


?>
