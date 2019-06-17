<?php
    include_once '../data.php';
    session_start();

    $user = $_GET['profile'];
    $current = $_SESSION['user_id'];

    $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
    $sql->execute([$user]);
    $row = $sql->fetch();
    if ($row['cur_on'] == 1)
        $status = 'Online';
    else
        $status = "Last Online: ".$row['online'];
    echo '<header class="w3-center w3-margin-bottom">
    <h1><b>'.$row["name"].' '.$row["surname"].'</b></h1>
    <p class="text-center" style="margin-top: 0px; color: grey">'.$status.'</p>
    <p class="text-center" style="margin-top: 0px; color: grey">@'.$row['user_name'].'</p>';

    $sql = $conec->prepare("SELECT COUNT(*) FROM pop WHERE viewed=?");
    $sql->execute([$current]);
    $res = $sql->fetchColumn();
    
    if ($res == 0)
    {
        $sql = $conec->prepare("INSERT INTO pop (user, viewed) VALUES (:user, :current)");
        $sql->bindParam(":user", $user);
        $sql->bindParam(":current", $current);
        $sql->execute();
    }
    $sql = $conec->prepare("SELECT COUNT(*) FROM pop WHERE user=?");
    $sql->execute([$user]);
    $res = $sql->fetchColumn();
    $popu = ($res * 0.05) * 10;
    echo '<p class="text-center" style="margin-top: -15px; color: grey">Popularity Rating: '.$popu.'</p>
    <p class="text-center" style="margin-top: -15px; color: grey">Views: '.$res.'</p>
    </header>';

    $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
    $sql->execute([$user]);
    $row = $sql->fetch();
    $img = $row['profile_pic'];
    echo "<img class='img-fluid' style='width: 98%; height: auto' src='data:image/png;base64,{$img}' alt='Card image cap'>";
?>