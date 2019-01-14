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
        <div class ="lol">
            <div class="center">
            <table border='2' cellpadding='0' cellspacing='7'>
            <tr>
                <th>Movie</th>
                <th>Theatre</th>
                <th>Tickets</th>
                <th>Price</th>
            </tr>
            
                <?php
                mysql_connect("localhost","root","");
                mysql_select_db("movie");
                $query = "SELECT * FROM shows";
                $result = mysql_query($query);
                
                
                while($row=mysql_fetch_array($result))
                {
                    echo"<table border='2' cellpadding='0' cellspacing='7'>";
                    echo"<tr>";
                    echo"<td>".$row[0]."</td>";
                    echo"<td>".$row[1]."</td>";
                    echo"<td>".$row[2]."</td>";
                    echo"<td>".$row[3]."</td>";
                    echo"</tr>";
                    echo"</table>";
                }
                
                
                
            ?>
            </table> 
                
        <form method="POST" action="confirmation.php">
        <div class="book">
            <h1>BOOK TICKETS</h1>
            <div class="textbox">
                <input type="text" placeholder="MovieName" name="mname" value="">
            </div>
            <div class="textbox">
                <input type="text" placeholder="Hall" name="hall" value="">
            </div>
            <div class="textbox">
                <input type="number" placeholder="No. of tickets" name="ticket" value="">
            </div>
            <input class ="btn" type="submit" value="Book"> <br><br>
            </div>        
            
        </form>
            
            
            </div>
        </div>
        
        
        </header>
    </body>
</head>
</html>