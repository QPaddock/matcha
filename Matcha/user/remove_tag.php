<?php

    include_once '../data.php';
        session_start();

        $user = $_SESSION['user_id'];
        $rem = $_GET['tag'];

        $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
        $sql->execute([$user]);
        $row = $sql->fetch();
        $tags = unserialize($row['tags']);
        if (sizeof($tags) != 0)
        {
            foreach ($tags as $key => $val)
            {
                if ($val == $rem)
                    unset($tags[$key]);
            }
            $tags = serialize($tags);
            $sql = $conec->prepare("UPDATE pref SET tags=:tags WHERE user=:user");
            $sql->bindParam(":tags", $tags);
            $sql->bindParam(":user", $user);
            $sql->execute();
            header('Location: profile.php');
            exit();
        }
    ?>