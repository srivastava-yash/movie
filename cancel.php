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
         
        <div class="midd">        
        <form method="POST" action="cconfirmation.php">
        <div class="book">
            <h1>Cancel TICKETS</h1>
            <div class="textbox">
                <input type="text" placeholder="MovieName" name="mname" value="">
            </div>
            <div class="textbox">
                <input type="text" placeholder="Hall" name="hall" value="">
            </div>
            <div class="textbox">
                <input type="number" placeholder="No. of tickets to cancel" name="ticket" value="">
            </div>
            <input class ="btn" type="submit" value="CANCEL"> <br><br>
            </div>        
            
        </form>
            </div>
            
            
    
        </header>
    </body>
</head>
</html>