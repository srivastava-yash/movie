<?php 
session_start(); 
?>
<html>
<head>
<title>Movie Booking</title>
<link href="style.css" rel="stylesheet" type="text/css">
    <body>
        <header>
        <div class="row">
        <ul class="main-nav">
            <li class="active"><a href="welcome.php"> HOME </a></li>
            <li><a href="shows.php"> SHOWS </a></li>
            <li><a href="about.php"> ABOUT </a></li>
            <li><a href="logout.php"> LOGOUT </a></li>
            
        </ul>    
        </div>
        <div class="center">
            <table class="show">
            <tr>
                <th>Username</th>
                <th>Movie</th>
                <th>Tickets</th>
            </tr>
            
                <?php
                $a=$_SESSION['name'];
                mysql_connect("localhost","root","");
                mysql_select_db("movie");
                $query = "SELECT * FROM history WHERE name='$a'";
                $result = mysql_query($query);
                
                
                while($row=mysql_fetch_array($result))
                {
                    echo"<table border='5' cellpadding='10' cellspacing='5'>";
                    echo"<tr>";
                    echo"<td>".$row[0]."</td>";
                    echo"<td>".$row[1]."</td>";
                    echo"<td>".$row[2]."</td>";
                    echo"</tr>";
                    echo"</table>";
                }
                
                
                
            ?>
            </table>    
        </div>        
        </header>
    </body>
</head>
</html>