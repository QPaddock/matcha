<?php
    include_once('loged-in.php');
?>

<header class="w3-center w3-margin-bottom">
  <h1><b>Matcha</b></h1>
</header>

<div class="container">
  <div class="row">

<?php

    include_once '../data.php';

    session_start();

    $current_user = $_SESSION['user_id'];

    $sql = $conec->prepare("SELECT * FROM likes WHERE liked_by=?");
    $sql->execute([$current_user]);
    $row = $sql->fetchAll();

    foreach ($row as $elem)
    {
        $user_id = $elem['liked'];
        $sql = $conec->prepare("SELECT * FROM users WHERE user_id=?");
        $sql->execute([$user_id]);
        $p = $sql->fetch();
        $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
        $sql->execute([$user_id]);
        $i = $sql->fetch();
        $name = $p['name'];
        $surname = $p['surname'];
        $img = $i['profile_pic'];
        $bio = $i['bio'];
        echo "<div class='col-sm mt-3'>
            <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='data:image/png;base64,{$img}' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>".$name." ".$surname."</h5>
                    <p class='card-text' style='overflow-y: scroll; height: 100px;'>".$bio."</p>
                    <a href='../site/view_profile.php?profile=".$user_id."' class='btn-color btn btn-primary'>View Profile</a>
                </div>
            </div>
        </div>";
    }

?>
</div>
</div>

<?php
    include('footer.php');
?>