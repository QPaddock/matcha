<?php
    include_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];

    $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
    $sql->execute([$user]);
    $row = $sql->fetch();
    if (sizeof($row['tags']) == 0)
        $tags = array();
    else
        $tags = unserialize($row['tags']);
    $tags[$_GET['tag']] = $_GET['tag'];

    echo $tags;
    $tags = serialize($tags);
    echo $tags;
    $sql = $conec->prepare("UPDATE pref SET tags=:tags WHERE user=:user");
    $sql->bindParam(":tags", $tags);
    $sql->bindParam(":user", $user);
    $sql->execute();
    header('Location: profile.php');
    exit();
?>