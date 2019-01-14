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
            <li class="active"><a href="home.php"> HOME </a></li>
            <li><a href="shows.php"> SHOWS </a></li>
            <li><a href="about.php"> ABOUT </a></li>
            <li><a href="logout.php"> LOGOUT </a></li>
            
        </ul>    
        </div>
        
            <div class="mid">
            <h1>SUCCESFUL</h1>
            <div> 
                <a href="booking.php">
                <button class="btn">Book more</button>
                </a>
            </div>
                </div>
            <div>
            <a href="logout.php">
                <button class="btn1">Back</button>
            </a>
            </div>
        
        </header>
    </body>
</head>
</html>