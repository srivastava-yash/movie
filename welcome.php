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
            <ul class="buttonss">
                <li><a href="shows.php">Shows</a></li>
                <li><a href="booking.php">Book a ticket</a></li>
                <li><a href="cancel.php">Cancel booking</a></li>
                <li><a href="history.php">Booking History</a></li>
            
            </ul>    
        </div>
        
        </header>
    </body>
</head>
</html>