<?php
    include_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];
    $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
    $sql->execute([$user]);
    $row = $sql->fetch();
    $img = "data:image/png;base64,".$row['profile_pic'];
    echo "<img class='img-fluid' style='width: 98%; height: auto' src='{$img}' alt='Card image cap' id='image5'>
    <br />
    <br />
    <div class='custom-file'>
    <form method='POST' action='upload_img.php' enctype='multipart/form-data'>
    <input type='file' accept='image/*' class='custom-file-input' id='inputGroupFile05' aria-describedby='inputGroupFileAddon01' name='image5'>
    <label class='custom-file-label' for='inputGroupFile05'>Choose file</label>
    <br />
    <br />
    <button class='btn-color btn btn-lg btn-primary btn-block' type='submit' name='submit'>Submit</button>
</form>
</div>";
?>