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
            
        </ul>    
        </div>
        <form action="registration.php" method="POST">
        <div class="login-box">
            <h1>Register</h1>
            <div class="textbox">
                <input type="text" placeholder="username" name="username" value="">
            </div>
            <div class="textbox">
                <input type="email" placeholder="email" name="email" value="">
            </div>
            <div class="textbox">
                <input type="password" placeholder="password" name="password" value="">
            </div>
            <input class ="btn" type="submit" value="Register"> <br><br>
            </div>
            </form>
            
            <a href="index.php">
                <button class ="btn1">Back</button>
            </a>
        
        
        
    </header>
    </body>
</head>
</html>