<?php
    include_once '../data.php';
    session_start();

    $user = $_GET['profile'];
    $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
    $sql->execute([$user]);
    $row = $sql->fetch();

    $bio = $row['bio'];

    echo '<blockquote class="blockquote text-center">
    <p class="mb-0">'.$bio.'</p>
  </blockquote>';
?>