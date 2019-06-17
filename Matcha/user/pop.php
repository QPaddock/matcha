<?php

    include_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];

    $sql = $conec->prepare("SELECT COUNT(*) FROM pop WHERE user=?");
    $sql->execute([$user]);
    $res = $sql->fetchColumn();
    $popu = ($res * 0.05) * 10;
    echo '<p class="text-center" style="margin-top: -15px; color: grey">Popularity Rating: '.$popu.'</p>
    <p class="text-center" style="margin-top: -15px; color: grey">Views: '.$res.'</p>'
?>