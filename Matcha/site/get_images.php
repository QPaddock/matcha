<?php
    include_once '../data.php';
    session_start();

    $user = $_GET['profile'];
    $sql = $conec->prepare("SELECT COUNT(*) FROM images WHERE user=?");
    $sql->execute([$user]);
    $row = $sql->fetchColumn();
    if ($row == 0)
    {
    }
    else
    {
        echo '<h3 style="margin-top: 10px;"><b>More Images</b></h3>';
        echo '<div class="container">
        <div class="row text-center text-lg-left>">';
        $sql = $conec->prepare("SELECT * FROM images WHERE user=?");
        $sql->execute([$user]);
        $row = $sql->fetchAll();
        foreach ($row as $elem)
        {
            $img = "data:image/png;base64,".$elem['image'];
           echo '<div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="'.$img.'" alt="">
                    </a>
                </div>';
        }
        echo '</div>';
    }
?>