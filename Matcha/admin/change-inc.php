<?php
    include_once '../data.php';
    session_start();

    if (isset($_POST['username']))
    {
        $user_id = $_SESSION['user_id'];
        $old_user = $_SESSION['user_name'];
        $user_name = $_POST['username'];
        $sql = $conec->prepare("SELECT COUNT(*) FROM users WHERE user_name=?");
        $sql->execute([$user_name]); 
        $res_check = $sql->fetchColumn();
        if ($res_check == 0)
        {
            $email = $_SESSION['user_email'];
            $sql = $conec->prepare("UPDATE users SET user_name=? WHERE user_id=?");
            $sql->execute([$user_name, $user_id]);
            $_SESSION['user_name'] = $user_name;
            $msg = 'New Username is: '.$user_name;
            $msg = wordwrap($msg,70);
            $header = "From: no-reply@matcha.co.za";
            mail($email, "New Username", $msg, $header);
            header('Location: edit_info.php?change=successful');
            exit();
        }
        else
        {
            header('Location: edit_info.php?change=usertaken');
            exit();
        }
    }
    
    if (isset($_POST['email']))
    {
        $user_id = $_SESSION['user_id'];
        $user_email = $_POST['email'];
        $sql = $conec->prepare("SELECT COUNT(*) FROM users WHERE user_email=?");
        $sql->execute([$user_email]); 
        $res_check = $sql->fetchColumn();
        if ($res_check == 0)
        {
            $sql = $conec->prepare("UPDATE users SET user_email=? WHERE user_id=?");
            $sql->execute([$user_email, $user_id]);
            $_SESSION['user_email'] = $user_email;
            $msg = 'New Password is: '.$user_email;
            $msg = wordwrap($msg,70);
            $header = "From: no-reply@matcha.co.za";
            mail($user_email, "New Email Address", $msg, $header);
            header('Location: edit_info.php?change=successful');
            exit();
        }
        else
        {
            header('Location: edit_info.php?change=emailtaken');
            exit();
        }
    }
    if (isset($_POST['name']))
    {
        $user_id = $_SESSION['user_id'];
        $user_email = $_POST['name'];
        $sql = $conec->prepare("UPDATE users SET name=? WHERE user_id=?");
        $sql->execute([$user_email, $user_id]);
        $_SESSION['user_email'] = $user_email;
        $msg = 'New Password is: '.$user_email;
        $msg = wordwrap($msg,70);
        $header = "From: no-reply@matcha.co.za";
        mail($user_email, "Name Changed", $msg, $header);
        header('Location: edit_info.php?change=successful');
        exit();
    }
    if (isset($_POST['surname']))
    {
        $user_id = $_SESSION['user_id'];
        $user_email = $_POST['surname'];
        $sql = $conec->prepare("UPDATE users SET surname=? WHERE user_id=?");
        $sql->execute([$user_email, $user_id]);
        $_SESSION['user_email'] = $user_email;
        $msg = 'New Password is: '.$user_email;
        $msg = wordwrap($msg,70);
        $header = "From: no-reply@matcha.co.za";
        mail($user_email, "Surname Changed", $msg, $header);
        header('Location: edit_info.php?change=successful');
        exit();
    }
?>