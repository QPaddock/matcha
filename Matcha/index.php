<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--<link rel="shortcut icon" href="./LogoMakr_3h5Vc4.ico"> -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!--<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css"> -->
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
		<a class="navbar-brand" href="#">Not a Member?</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="./signup.php">Signup <span class="sr-only">(current)</span></a>
			</li>
			</li>
			</ul>
		</div>
		</nav>

		<!-- <div class="w3-display-middle border"> -->
			<h3 class="text-center h3 mb-3 font-weight-normal">Login</h3>
			<form class="form-signin" action="login-inc.php" method="POST">
				<input class="form-control" type="text" name="username" placeholder="Username" required="username" autofocus>
				<br />
				<input class="form-control" type="password" name="password" placeholder="Password" required="password">
				<br />
				<button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
			</form>
			<div class="form-signin">
				<button class="btn-color btn btn-lg btn-primary btn-block" onclick="location.href='./forgot_pwd.php'">Forgot Password?</button>
			</div>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
