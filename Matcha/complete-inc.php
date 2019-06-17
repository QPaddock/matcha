<?php
    require_once 'data.php';
    session_start();

    if (isset($_POST['gender']) && isset($_POST['pref']) && isset($_POST['bio']))
    {
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check != false)
        {
            $image = $_FILES['image']['tmp_name'];
            $image_cont = file_get_contents($image);
            $img = base64_encode($image_cont);
            $user_id = $_SESSION['user_id'];
            $gender = $_POST['gender'];
            $preference = $_POST['pref'];
            if ($gender == 'female')
            {
                if ($preference == 'male')
                {
                    $code = 2;
                }
                if ($preference == 'female')
                {
                    $code = 4;
                }
                if ($preference == 'both')
                {
                    $code = 6;
                }
            }
            else
            {
                if ($preference == 'female')
                {
                    $code = 1;
                }
                if ($preference == 'male')
                {
                    $code = 3;
                }
                if ($preference == 'both')
                {
                    $code = 5;
                }
            }
            $bio = $_POST['bio'];
            $tags = NULL;
            $sql = $conec->prepare("INSERT INTO pref (user, gender, preference, bio, profile_pic, tags, code) VALUES (:user_id, :gender, :preference, :bio, :image, :tags, :code)");
            $sql->bindParam(":user_id", $user_id);
            $sql->bindParam(":gender", $gender);
            $sql->bindParam(":preference", $preference);
            $sql->bindParam(":bio", $bio);
            $sql->bindParam(":image", $img);
            $sql->bindParam(":tags", $tags);
            $sql->bindParam(":code", $code);
            $sql->execute();
            $sql = $conec->prepare("UPDATE users SET comp=1 WHERE user_id=?");
            $sql->execute([$user_id]);
            header('Location: ./site/home.php?page=0');
            exit();
        }
        else 
        {
            header("Location: complete.php");
            exit();
        }

    }
?>