<!DOCTYPE html>
<html>
	<head>
		<title>Verify</title>
		<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" style="height: 55px">
    </nav>
	<h3 class="w3-center">Verify</h3>
	<form class="form-signin w3-center" action="verify-inc.php" method="POST" id="frm" enctype="multipart/form-data">
		<input class="form-control" type="text" name="username" placeholder="Username" required="username">
		<br />
		<br />
		<input class="form-control" type="password" name="password" placeholder="OTP" required="password">
		<br />
		<br />
		<button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Verify</button>
	</form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>