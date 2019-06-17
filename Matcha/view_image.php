<?php
    include_once('nav-bars.php');
    include_once('../data.php');
    session_start();
?>

<header>
    <h4 style="margin-left:10px;">Uploaded by: <?php 
        $img_id = $_GET['image'];

        $sql = $conec->prepare("SELECT * FROM images WHERE image_id=?");
        $sql->execute([$img_id]);
        $row = $sql->fetch();
        $user = $row['image_user'];
        echo $user;
    ?></h4>
    <p class="time"><?php
    $img_id = $_GET['image'];

    $sql = $conec->prepare("SELECT * FROM images WHERE image_id=?");
    $sql->execute([$img_id]);
    $row = $sql->fetch();
    $time = $row['image_time']; 
    echo $time; 
    ?>
</header>

<div class="row">
  <div class="column">
    <?php
        $img_id = $_GET['image'];

        $sql = $conec->prepare("SELECT * FROM images WHERE image_id=?");
        $sql->execute([$img_id]);
        $row = $sql->fetch();
        $user = $row['image_user'];

        $img = $row['image'];
        echo "<img src='data:image/png;base64,{$img}' style='width:100%'/>";
    ?>
    </div>
</div>

<div class="like">
<form action="like.php">
    <input type="hidden" name="image" value="<?php echo $_GET['image']; ?>">
    <button class="w3-right likebtn" type="submit" name="like">&#10084; Like</button>
    <h6 class="w3-left likes_dis" >&#10084; <?php 
            include_once '../data.php';

            $image = $_GET['image'];
            $sql = $conec->prepare("SELECT COUNT(*) FROM likes WHERE image_id=?");
            $sql->execute([$image]);
            $res_check = $sql->fetchColumn();
            echo $res_check;
        ?></h6>
</form>
</div>
<br />
<hr>
<div class='w3-center'>
    <br />
    <textarea id='textbox' class='w3-center' rows="1" cols='60' name='comment' form='frm' placeholder='Comment' maxlength="250" required></textarea>
    <form action='comments.php' id="frm" method='POST'>
        <input class='next_prev' type='submit'>
        <input type="hidden" name="image" value="<?php echo $_GET['image']; ?>">
    </form>
</div>

<div class='w3-center'>
<?php
    $img = $_GET['image'];
    $sql = $conec->prepare("SELECT * FROM comments WHERE image_id=? ORDER BY cmt_time DESC");
    $sql->execute([$img]);
    $row = $sql->fetchAll();
    foreach ($row as $elem)
	{
        $user = $elem['cmt_user'];
        $dt = $elem['cmt_time'];
        $pro = $conec->prepare("SELECT * FROM users WHERE user_id=?");
        $pro->execute([$user]);
        $get_user = $pro->fetch();

        echo "<p class='user'>".$get_user['user_name']."</p>"."<p class='commentbox'>".$elem['cmt']."</p>
                <p class='date'>".$dt."<p>
                <hr>";
    }
?>
</div>