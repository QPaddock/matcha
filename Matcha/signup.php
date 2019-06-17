<!DOCTYPE html>
<html>
	<head>
		<title>Sign-Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="./LogoMakr_3h5Vc4.ico">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
			<a class="navbar-brand" href="#">Already a Member?</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="./index.php">Login <span class="sr-only">(current)</span></a>
				</li>
				</li>
				</ul>
			</div>
		</nav>
			<h3 class="text-center h3 mb-3 font-weight-normal">Sign-Up</h3>
			<form class="form-signin" action="signup-inc.php" method="POST">
				<input class="form-control" type="text" name="name" placeholder="Name" required="name">
				<br />
				<input class="form-control" type="text" name="surname" placeholder="Surname" required="surname">
				<br />
				<input class="form-control" type="email" name="email" placeholder="Email" required="email">
				<br />
				<input class="form-control" type="date" name="birthday" placeholder="Date of Birth" required="date" max="2000-01-01">
				<br />
				<input class="form-control" type="text" name="username" placeholder="Username" required="username">
				<br />
				<input id="password" class="form-control" type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain: atleast One Number, a Capital Leter, Lowercase, and must be at least 8 characters" required>
				<br />
				<span id="msg"></span>
				<input class="form-control" type="password" name="confirm" placeholder="Confirm Password" required="password">
				<br />
				<button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit" id="btn">Sign-Up</button>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>