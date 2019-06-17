<?php
    include_once('../data.php');
    session_start();

    $reason = $_GET['type'];
    $user = $_GET['user'];
    $cur_user = $_SESSION['user_id'];
    $email = 'quinten.paddock@me.com';

    $msg = 'User '.$user." has been reported for being: ".$reason;
    $msg = wordwrap($msg,70);
    $header = "From: no-reply@matcha.co.za";
    mail($email, "User Being Reported!", $msg, $header);

    $sql = $conec->prepare("SELECT COUNT(*) FROM blocked WHERE block_by=? AND block=?");
    $sql->execute([$cur_user, $user]);
    $res_check = $sql->fetchColumn();

    if ($res_check == 0)
    {
        $sql = $conec->prepare("INSERT INTO blocked (block_by, block) VALUES (:block_by, :block)");
        $sql->bindParam(":block_by", $cur_user);
        $sql->bindParam(":block", $user);
        $sql->execute();
    }

    header('Location: home.php');
    exit();
?>