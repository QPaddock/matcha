<?php
	
	session_start();
	
	if (isset($_POST['submit']))
	{
		include_once 'data.php';
		
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		
		if (empty($user) || empty($pwd))
		{
			header("Location: verify.php?login=empty");
			exit();
		}
		else
		{
			$sql = $conec->prepare("SELECT COUNT(*) FROM users WHERE user_name=?");
			$sql->execute([$user]);
			$res_check = $sql->fetchColumn();
			if ($res_check < 1)
			{
				header("Location: verify.php?login=error0");
				exit();
			}
			else
			{
				$sql = $conec->prepare("SELECT * FROM users WHERE user_name=?");
				$sql->execute([$user]);
				$row = $sql->fetch();
				if ($row)
				{
					if ($row['vari'] == 1)
					{
						header("Location: ./complete.php");
						exit();
					}
					$passwd = hash('md5', $pwd);
					

					if ($passwd !== $row['otp'])
					{
						header("Location: ./verify.php?login=error1");
						exit();
					}
					else
					{
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['surname'] = $row['surname'];
						$_SESSION['user_email'] = $row['user_email'];
						$_SESSION['user_name'] = $row['user_name'];
						$_SESSION['user_dob'] = $row['user_dob'];
						$_SESSION['login'] = 'yes';
						$sql = $conec->prepare("UPDATE users SET vari=1 WHERE user_name=?");
                		$sql->execute([$user]);
						header("Location: ./complete.php");
						exit();
					}
				}
				else
				{
					header ("Location: ./verify.php?login=error2");
					exit();
				}
			}
		}
	}
	else
	{
		header("Location: ./verify.php?login=error");
		exit();
	}
?>