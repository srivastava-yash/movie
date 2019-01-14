<?php
session_start();
$x=$_POST['mname'];
$y=$_POST['hall'];
$z=$_POST['ticket'];
$a=$_SESSION['name'];
if($x=="" || $y=="" || $z==0)
{
    echo "Please fill all details";
    header("Location:cancel.php");
}

else
{
    mysql_connect("localhost","root","");
    mysql_select_db("movie");
    $query = "UPDATE shows SET tickets=tickets+$z WHERE name='$x' && nameTheatre='$y'";
    mysql_query($query);
    $query2 = "UPDATE history SET ticket=ticket-$z WHERE name=$a";
    mysql_query($query2);
    
    header("Location:done.php");
}


?>
