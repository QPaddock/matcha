<?php
	
	session_start();
	
	if (isset($_POST['submit']))
	{
		include_once 'data.php';
		
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		
		if (empty($user) || empty($pwd))
		{
			header("Location: index.php?login=empty");
			exit();
		}
		else
		{
			$sql = $conec->prepare("SELECT COUNT(*) FROM users WHERE user_name= ?");
			$sql->execute([$user]);
			$res_check = $sql->fetchColumn();
			if ($res_check < 1)
			{
				header("Location: index.php?login=error0");
				exit();
			}
			else
			{
				$sql = $conec->prepare("SELECT * FROM users WHERE user_name = ?");
				$sql->execute([$user]);
				$row = $sql->fetch();
				if ($row['vari'] == 0)
				{
					header("Location: ./verify.php");
					exit();
				}
				if ($row)
				{
					$passwd = hash('md5', $pwd);
					
					
					if ($passwd !== $row['user_pwd'])
					{
						header("Location: ./index.php?login=error1");
						exit();
					}
					else
					{
						$sql = $conec->prepare("UPDATE users SET cur_on=1 where user_id=?");
						$sql->execute([$row['user_id']]);
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['surname'] = $row['surname'];
						$_SESSION['user_email'] = $row['user_email'];
						$_SESSION['user_name'] = $row['user_name'];
						$_SESSION['user_dob'] = $row['user_dob'];
						$_SESSION['login'] = 'yes';
						if ($row['comp'] == 0)
						{
							header("Location: ./complete.php");
							exit();
						}
						header("Location: ./site/home.php?login=success&page=0");
						exit();
					}
				}
				else
				{
					header ("Location: ./index.php?login=error2");
					exit();
				}
			}
		}
	}
	else
	{
		header("Location: ./index.php?login=error");
		exit();
	}
?>