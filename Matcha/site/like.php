<?php
    include_once '../data.php';

    session_start();

    $cur_user = $_SESSION['user_id'];
    $user = $_GET['profile'];

    $sql = $conec->prepare("INSERT INTO likes (liked_by, liked) VALUES (:cur_user, :user)");
    $sql->bindParam(':cur_user', $cur_user);
    $sql->bindParam(':user', $user);
    $sql->execute();

    $sql = $conec->prepare("SELECT COUNT(*) FROM likes WHERE liked_by=? AND liked=?");
    $sql->execute([$cur_user, $user]);
    $res_check = $sql->fetchColumn();

    $sql = $conec->prepare("SELECT COUNT(*) FROM likes WHERE liked_by=? AND liked=?");
    $sql->execute([$user, $cur_user]);
    $res_check = $res_check + $sql->fetchColumn();

    if ($res_check == 2)
    {
        $sql = $conec->prepare("SELECT COUNT(*) FROM matched WHERE matched=? AND matched_with=?");
        $sql->execute([$user, $cur_user]);
        $res_check = $sql->fetchColumn();

        $sql = $conec->prepare("SELECT COUNT(*) FROM matched WHERE matched_with=? AND matched=?");
        $sql->execute([$user, $cur_user]);
        $res_check = $res_check + $sql->fetchColumn();
        if ($res_check == 0)
        {
            $sql = $conec->prepare("INSERT INTO matched (matched, matched_with) VALUES (:cur_user, :user)");
            $sql->bindParam(':cur_user', $cur_user);
            $sql->bindParam(':user', $user);
            $sql->execute();
        }
    }
    header('Location: view_profile.php?profile='.$user);
    exit();
?>