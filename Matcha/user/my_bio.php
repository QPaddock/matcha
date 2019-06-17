<?php
    include_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];
    $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
    $sql->execute([$user]);
    $row = $sql->fetch();

    $bio = $row['bio'];

    echo ' <form class="form-signin w3-center" action="update_bio.php" method="POST" id="frm" enctype="multipart/form-data">
                <textarea id="textbox" class="form-control" rows="3" cols="30" name="bio" form="frm" placeholder="'.$bio.'" maxlength="2500" required></textarea>
                <br />
                <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Change</button>
            </form>'
?>