<?php
    include_once '../data.php';

    session_start();

    $current_user = $_SESSION['user_id'];

    $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
    $sql->execute([$current_user]);
    $row = $sql->fetch();
    $user_code = $row['code'];

    if ($user_code == 1)
    {
        $sql = $conec->prepare("SELECT * FROM pref WHERE code=2 OR code=6");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $elem)
        {
                $user_id = $elem['user'];
                $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
                $sql->execute([$user_id]);
                $p = $sql->fetch();
                $name = $p['name'];
                $surname = $p['surname'];
                $img = $elem['profile_pic'];
                $bio = $elem['bio'];
                $sql = $conec->prepare("SELECT COUNT(*) FROM blocked WHERE block=? AND block_by=?");
                $sql->execute([$current_user, $user_id]);
                $blocked = $sql->fetchColumn();
                if ($blocked < 1)
                {
                    echo "<div class='col-sm mt-3'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='data:image/png;base64,{$img}' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$name." ".$surname."</h5>
                                <p class='card-text' style='overflow-y: scroll; height: 100px;'>".$bio."</p>
                                <a href='view_profile.php?profile=".$user_id."' class='btn-color btn btn-primary'>View Profile</a>
                            </div>
                        </div>
                    </div>";
                }
        }
    }

    elseif ($user_code == 2)
    {

        $sql = $conec->prepare("SELECT * FROM pref WHERE code=1 OR code=5");
        $sql->execute();
        $row = $sql->fetchAll();

        foreach ($row as $elem)
        {
                $user_id = $elem['user'];
                $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
                $sql->execute([$user_id]);
                $p = $sql->fetch();
                $name = $p['name'];
                $surname = $p['surname'];
                $img = $elem['profile_pic'];
                $bio = $elem['bio'];
                $sql = $conec->prepare("SELECT COUNT(*) FROM blocked WHERE block=? AND block_by=?");
                $sql->execute([$current_user, $user_id]);
                $blocked = $sql->fetchColumn();
                if ($blocked < 1)
                {
                    echo "<div class='col-sm mt-3'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='data:image/png;base64,{$img}' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$name." ".$surname."</h5>
                                <p class='card-text' style='overflow-y: scroll; height: 100px;'>".$bio."</p>
                                <a href='view_profile.php?profile=".$user_id."' class='btn-color btn btn-primary'>View Profile</a>
                            </div>
                        </div>
                    </div>";
                }
        }
    }

    elseif ($user_code == 3)
    {
        $sql = $conec->prepare("SELECT * FROM pref WHERE code=3 OR code=5");
        $sql->execute();
        $row = $sql->fetchAll();

        foreach ($row as $elem)
        {
                $user_id = $elem['user'];
                $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
                $sql->execute([$user_id]);
                $p = $sql->fetch();
                $name = $p['name'];
                $surname = $p['surname'];
                $img = $elem['profile_pic'];
                $bio = $elem['bio'];
                $sql = $conec->prepare("SELECT COUNT(*) FROM blocked WHERE block=? AND block_by=?");
                $sql->execute([$current_user, $user_id]);
                $blocked = $sql->fetchColumn();
                if ($blocked < 1)
                {
                    echo "<div class='col-sm mt-3'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='data:image/png;base64,{$img}' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$name." ".$surname."</h5>
                                <p class='card-text' style='overflow-y: scroll; height: 100px;'>".$bio."</p>
                                <a href='view_profile.php?profile=".$user_id."' class='btn-color btn btn-primary'>View Profile</a>
                            </div>
                        </div>
                    </div>";
                }
        }
    }

    elseif ($user_code == 4)
    {
        $sql = $conec->prepare("SELECT * FROM pref WHERE code=4 OR code=6");
        $sql->execute();
        $row = $sql->fetchAll();

        foreach ($row as $elem)
        {
                $user_id = $elem['user'];
                $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
                $sql->execute([$user_id]);
                $p = $sql->fetch();
                $name = $p['name'];
                $surname = $p['surname'];
                $img = $elem['profile_pic'];
                $bio = $elem['bio'];
                $sql = $conec->prepare("SELECT COUNT(*) FROM blocked WHERE block=? AND block_by=?");
                $sql->execute([$current_user, $user_id]);
                $blocked = $sql->fetchColumn();
                if ($blocked < 1)
                {
                    echo "<div class='col-sm mt-3'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='data:image/png;base64,{$img}' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$name." ".$surname."</h5>
                                <p class='card-text' style='overflow-y: scroll; height: 100px;'>".$bio."</p>
                                <a href='view_profile.php?profile=".$user_id."' class='btn-color btn btn-primary'>View Profile</a>
                            </div>
                        </div>
                    </div>";
                }
        }
    }

    elseif ($user_code == 5)
    {

        $sql = $conec->prepare("SELECT * FROM pref WHERE code=3 OR code=2 OR code=5 OR code=6");
        $sql->execute();
        $row = $sql->fetchAll();

        foreach ($row as $elem)
        {
                $user_id = $elem['user'];
                $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
                $sql->execute([$user_id]);
                $p = $sql->fetch();
                $name = $p['name'];
                $surname = $p['surname'];
                $img = $elem['profile_pic'];
                $bio = $elem['bio'];
                $sql = $conec->prepare("SELECT COUNT(*) FROM blocked WHERE block=? AND block_by=?");
                $sql->execute([$current_user, $user_id]);
                $blocked = $sql->fetchColumn();
                if ($blocked < 1)
                {
                    echo "<div class='col-sm mt-3'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='data:image/png;base64,{$img}' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$name." ".$surname."</h5>
                                <p class='card-text' style='overflow-y: scroll; height: 100px;'>".$bio."</p>
                                <a href='view_profile.php?profile=".$user_id."' class='btn-color btn btn-primary'>View Profile</a>
                            </div>
                        </div>
                    </div>";
                }
            }
    }

    elseif ($user_code == 6)
    {

        $sql = $conec->prepare("SELECT * FROM pref WHERE code=4 OR code=1 OR code=5 OR code=6");
        $sql->execute();
        $row = $sql->fetchAll();

        foreach ($row as $elem)
        {
                $user_id = $elem['user'];
                $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
                $sql->execute([$user_id]);
                $p = $sql->fetch();
                $name = $p['name'];
                $surname = $p['surname'];
                $img = $elem['profile_pic'];
                $bio = $elem['bio'];
                $sql = $conec->prepare("SELECT COUNT(*) FROM blocked WHERE block=? AND block_by=?");
                $sql->execute([$user_id, $current_user]);
                $blocked = $sql->fetchColumn();
                if ($blocked < 1)
                {
                    echo "<div class='col-sm mt-3'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='data:image/png;base64,{$img}' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$name." ".$surname."</h5>
                                <p class='card-text' style='overflow-y: scroll; height: 100px;'>".$bio."</p>
                                <a href='view_profile.php?profile=".$user_id."' class='btn-color btn btn-primary'>View Profile</a>
                            </div>
                        </div>
                    </div>";
                }
        }
    }
?>