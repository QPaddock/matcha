<!DOCTYPE html>
<html>
	<head>
		<title>Matcha</title>
		<link rel="shortcut icon" href="../LogoMakr_3h5Vc4.ico">
		<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
        <ul>
			<li><p>Not a member?</p></li>
			<li><a href="signup.php">Sign-Up</a></li>
			<li style="float: right;"><a href="site/home.php?login=guest&page=0">Skip ></a></li>
		</ul>

        <div class="w3-display-middle border">
			<h3 class="w3-center">Forgot Password</h3>
			<form class="w3-center" action="forgot_pwd_inc.php" method="POST">
				<input class="w3-center border" type="email" name="email" placeholder="Email" required="email">
				<br />
				<br />
				<button class="LoginS" type="submit" name="submit">Submit</button>
			</form>
		</div>
        </body>
        </html>