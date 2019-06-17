<?php
    include_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];

    $check = getimagesize($_FILES['image1']['tmp_name']);
    if ($check != false)
    {
        $image = $_FILES['image1']['tmp_name'];
        $image_cont = file_get_contents($image);
        $img = base64_encode($image_cont);
        $sql = $conec->prepare("SELECT COUNT(*) FROM images WHERE user=? AND image_num=1");
        $sql->execute([$user]);
        $row = $sql->fetchColumn();
        if ($row != 0)
        {
            $sql = $conec->prepare("UPDATE images SET image=:img WHERE user=:user AND image_num=1");
            $sql->bindParam(":img", $img);
            $sql->bindParam(":user", $user);
            $sql->execute();
            header("Location: profile.php");
            exit();
        }
        else
        {
            $sql = $conec->prepare("INSERT INTO images (user, image, image_num) VALUES (:user, :img, 1)");
            $sql->bindParam(":user", $user);
            $sql->bindParam(":img", $img);
            $sql->execute();
            header("Location: profile.php");
            exit();              
        }
    }

    $check = getimagesize($_FILES['image2']['tmp_name']);
    if ($check != false)
    {
        $image = $_FILES['image2']['tmp_name'];
        $image_cont = file_get_contents($image);
        $img = base64_encode($image_cont);
        $sql = $conec->prepare("SELECT COUNT(*) FROM images WHERE user=? AND image_num=2");
        $sql->execute([$user]);
        $row = $sql->fetchColumn();
        if ($row != 0)
        {
            $sql = $conec->prepare("UPDATE images SET image=:img WHERE user=:user AND image_num=2");
            $sql->bindParam(":img", $img);
            $sql->bindParam(":user", $user);
            $sql->execute();
            header("Location: profile.php");
            exit();
        }
        else
        {
            $sql = $conec->prepare("INSERT INTO images (user, image, image_num) VALUES (:user, :img, 2)");
            $sql->bindParam(":user", $user);
            $sql->bindParam(":img", $img);
            $sql->execute();
            header("Location: profile.php");
            exit();              
        }
    }

    $check = getimagesize($_FILES['image3']['tmp_name']);
    if ($check != false)
    {
        $image = $_FILES['image3']['tmp_name'];
        $image_cont = file_get_contents($image);
        $img = base64_encode($image_cont);
        $sql = $conec->prepare("SELECT COUNT(*) FROM images WHERE user=? AND image_num=3");
        $sql->execute([$user]);
        $row = $sql->fetchColumn();
        if ($row != 0)
        {
            $sql = $conec->prepare("UPDATE images SET image=:img WHERE user=:user AND image_num=3");
            $sql->bindParam(":img", $img);
            $sql->bindParam(":user", $user);
            $sql->execute();
            header("Location: profile.php");
            exit();
        }
        else
        {
            $sql = $conec->prepare("INSERT INTO images (user, image, image_num) VALUES (:user, :img, 3)");
            $sql->bindParam(":user", $user);
            $sql->bindParam(":img", $img);
            $sql->execute();
            header("Location: profile.php");
            exit();              
        }
    }

    $check = getimagesize($_FILES['image4']['tmp_name']);
    if ($check != false)
    {
        $image = $_FILES['image4']['tmp_name'];
        $image_cont = file_get_contents($image);
        $img = base64_encode($image_cont);
        $sql = $conec->prepare("SELECT COUNT(*) FROM images WHERE user=? AND image_num=4");
        $sql->execute([$user]);
        $row = $sql->fetchColumn();
        if ($row != 0)
        {
            $sql = $conec->prepare("UPDATE images SET image=:img WHERE user=:user AND image_num=4");
            $sql->bindParam(":img", $img);
            $sql->bindParam(":user", $user);
            $sql->execute();
            header("Location: profile.php");
            exit();
        }
        else
        {
            $sql = $conec->prepare("INSERT INTO images (user, image, image_num) VALUES (:user, :img, 4)");
            $sql->bindParam(":user", $user);
            $sql->bindParam(":img", $img);
            $sql->execute();
            header("Location: profile.php");
            exit();              
        }
    }

    $check = getimagesize($_FILES['image5']['tmp_name']);
    if ($check != false)
    {
        $image = $_FILES['image5']['tmp_name'];
        $image_cont = file_get_contents($image);
        $img = base64_encode($image_cont);
        $sql = $conec->prepare("UPDATE pref SET profile_pic=:img WHERE user=:user");
        $sql->bindParam(":img", $img);
        $sql->bindParam(":user", $user);
        $sql->execute();
        header("Location: profile.php");
        exit();
    }
    header("Location: profile.php?no_file");
    exit();
?>