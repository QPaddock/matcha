<?php
    require_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];

    if (isset($_POST['bio']))
    {
        echo 'hello';
        $user_id = $_SESSION['user_id'];
        $bio = $_POST['bio'];
        $sql = $conec->prepare("UPDATE pref SET bio=:bio WHERE user=:user");
        $sql->bindParam(":bio", $bio);
        $sql->bindParam(":user", $user);
        $sql->execute();
        header('Location: profile.php');
        exit();
    }
?>