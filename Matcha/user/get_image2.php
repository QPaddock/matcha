<?php
    include_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];
    $sql = $conec->prepare("SELECT COUNT(*) FROM images WHERE user=? AND image_num=2");
    $sql->execute([$user]);
    $row = $sql->fetchColumn();
    if ($row == 0)
    {
        echo "../resources/add_pic.png";
    }
    else
    {
        $sql = $conec->prepare("SELECT * FROM images WHERE user=? AND image_num=2");
        $sql->execute([$user]);
        $row = $sql->fetch();
        $img = $row['image'];
        echo "data:image/png;base64,".$img;    
    }
?>