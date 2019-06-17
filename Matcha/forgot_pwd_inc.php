<?php
    include_once 'data.php';

    $email = $_POST['email'];

    if (empty($email))
	{
        header("Location: index.php?form=empty");
        exit();
    }
    else
    {
        $sql = $conec->prepare("SELECT COUNT(*) FROM users WHERE user_name= ?");
        $sql->execute([$user]);
        $res_check = $sql->fetchColumn();
        if ($res_check != 0)
        {
            header("Location: index.php?usernotfound");
            exit();
        }
        else
        {
            $sql = $conec->prepare("SELECT * FROM users WHERE user_email=?");
            $sql->execute([$email]);
            $row = $sql->fetch();
            $user = $row['user_id'];
            if ($row['user_email'] == $email)
            {
                $otp = rand(1000, 1000000);
                $otp_hash = hash('md5', $otp);
                $sql = $conec->prepare("UPDATE users SET user_pwd=? WHERE user_id=?");
                $sql->execute([$otp_hash, $user]);
                
                $msg = 'New Password is: '.$otp;
                $msg = wordwrap($msg,70);
                $header = "From: no-reply@Matcha.co.za";
                mail($email, "New Password", $msg, $header);
                header("Location: index.php?passwordchanged");
                exit();
            }
            else
            {
                header("Location: index.php?wrongemail");
                exit();
            }
        }
    }
?>