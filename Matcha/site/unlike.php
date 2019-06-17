<?php
    include_once '../data.php';

    session_start();

    $cur_user = $_SESSION['user_id'];
    $user = $_GET['profile'];

    $sql = $conec->prepare("SELECT COUNT(*) FROM likes WHERE liked_by=? AND liked=?");
    $sql->execute([$cur_user, $user]);
    $res_check = $sql->fetchColumn();
    if ($res_check > 0)
    {
        $sql = $conec->prepare("DELETE FROM likes WHERE liked=? AND liked_by=?");
        $sql->execute([$user, $cur_user]);

        $sql = $conec->prepare("SELECT COUNT(*) FROM matched WHERE matched=? AND matched_with=?");
        $sql->execute([$user, $cur_user]);
        $res_check = $sql->fetchColumn();
        if ($res_check == 1)
        {
            $sql = $conec->prepare("DELETE FROM matched WHERE matched=? AND matched_with=?");
            $sql->execute([$user, $cur_user]);
        }

        $sql = $conec->prepare("SELECT COUNT(*) FROM matched WHERE matched_with=? AND matched=?");
        $sql->execute([$user, $cur_user]);
        $res_check = $sql->fetchColumn();
        if ($res_check == 1)
        {
            $sql = $conec->prepare("DELETE FROM matched WHERE matched_with=? AND matched=?");
        $sql->execute([$user, $cur_user]);
        }
        header('Location: view_profile.php?profile='.$user);
        exit();
    }