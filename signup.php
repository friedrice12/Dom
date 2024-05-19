<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKKAL</title>
    

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/singup.css">

    <!--ICONSOUT-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <?php
        $cssPath = 'css/styles.css';
        if (file_exists($cssPath)) {
            echo '<link rel="stylesheet" href="' . $cssPath . '">';
        } else {
            echo '<!-- CSS file not found -->';
        }
    ?>
    <!--GOOGLEFONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h4>Sakkal</h4></a>
            <ul class="nav__menu">
                
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                
            </ul>

        </div>
    </nav>





    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="connect.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="Username">
					<input type="email" name="email" placeholder="Email">
          
					<input type="password" name="password" placeholder="Password" >
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>


</body>
</html>