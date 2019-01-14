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
        
        <form action="login.php" method="POST">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <input type="text" placeholder="Username" name="username" value="">
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class ="btn" type="submit" value="Sign in"> <br><br>
            </div>
            </form>
            
          
            <a href="register.php">
                <button class="btn1">Register </button>
            </a>
        
        </header>
    </body>
</head>
</html>