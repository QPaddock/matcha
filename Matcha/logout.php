<?php
    include_once 'data.php';
    date_default_timezone_set('Africa/Harare');

    session_start();
    $user = $_SESSION['user_id'];
    $_SESSION = array();
    $dt = date("Y-m-d H:i:s");
    $sql = $conec->prepare("UPDATE users SET cur_on=0 where user_id=?");
    $sql->execute([$user]);
    $sql = $conec->prepare("UPDATE users SET online=? where user_id=?");
	$sql->execute([$dt, $user]);
    session_destroy();
    header('Location: index.php?logged_out');
    exit();
?>