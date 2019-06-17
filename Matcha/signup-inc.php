<?php
	include_once 'data.php';

	if (isset($_POST['submit']))
	{
		$first = $_POST['name'];
		$last = $_POST['surname'];
		$email = $_POST['email'];
		$dob = $_POST['birthday'];
		$user = $_POST['username'];
		$pwd = $_POST['password'];

		if ($_POST['password'] !== $_POST['confirm'])
		{
			header("Location: signup.php?password=notmatch");
			exit();
		}

		if (!preg_match("/^[a-zA-z]/", $first) && !preg_match("/^[a-zA-z]/", $last))
		{
			header("Location: signup.php?signup=invalid");
			exit();
		}
		else
		{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
				header("Location: signup.php?signup=email");
                exit();
            }
            else
            {
            	$sql = $conec->prepare("SELECT COUNT(*) FROM users WHERE user_name=?");
            	$sql->execute([$user]);
            	$res_check = $sql->fetchColumn();
            	if ($res_check > 0)
            	{
            		header('Location: signup.php?signup=usertaken');
            	}
            	else
            	{
					$otp = rand(1000, 1000000);
                	$otp_hash = hash('md5', $otp);
            		$hash_pwd = hash("md5", $pwd);
					$sql = $conec->prepare("INSERT INTO users (name, surname, user_name, user_pwd, user_email, user_dob, vari, otp, comp) VALUES (:first, :last, :user, :hash_pwd, :email, :dob, 0, :otp_hash, 0)");
					$sql->bindParam(":first", $first);
					$sql->bindParam(":last", $last);
					$sql->bindParam(":user", $user);
					$sql->bindParam(":hash_pwd", $hash_pwd);
					$sql->bindParam(":email", $email);
					$sql->bindParam(":dob", $dob);
					$sql->bindParam(":otp_hash", $otp_hash);
					$sql->execute();

					$msg = 'New OTP Password is: '.$otp;
					$msg = wordwrap($msg,70);
					$header = "From: no-reply@matcha.co.za";
					mail($email, "verify Account", $msg, $header);					
                    header("Location: verify.php?signup=success"); // Change
                    exit();
            	}
            }	
		}
	}
	else
	{
		header("Location: signup.php");
		exit();
	}
?>