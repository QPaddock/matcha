<?php
    include('loged-in.php');  
?>
<br />
<br />
<br />

<div class="text-center">
    <?php include('./user_info.php'); ?>
    <h3 style="margin-top: 10px;"><b>Interests</b></h3>
    <div style="overflow-y: scroll; max-height: 150px">
        <?php include('tags.php') ?>
    </div>
    <hr>
    <h3 style="margin-top: 10px;"><b>Bio</b></h3>
    <div>
        <?php include('bio.php') ?>
    </div>
    <hr>
        <?php include('get_images.php'); ?>

<?php
    $cur_user = $_SESSION['user_id'];
    $user = $_GET['profile'];

    $sql = $conec->prepare("SELECT COUNT(*) FROM likes WHERE liked_by=? AND liked=?");
    $sql->execute([$cur_user, $user]);
    $res_check = $sql->fetchColumn();

    if ($res_check == 0)
    {
        echo '<a class="btn-color btn btn-primary" style="margin-top: 5px;" href="like.php?profile='.$_GET['profile'].'" role="button">Like</a>'.' ';
    }
    else
    {
        echo '<a class="btn-color btn btn-primary" style="margin-top: 5px;" href="unlike.php?profile='.$_GET['profile'].'" role="button">Unlike</a>'.' ';
    }
?>

<div class="dropdown" style="margin-top: 5px;">
    <button class="btn-color btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Report
    </button>
    <div class="dropdown-menu" aria-labeledby="dropdownMenuButton">
        <a class="dropdown-item" href="report.php?type=Offensive&user=<?php echo $_GET['profile'] ?>">Offensive</a>
        <a class="dropdown-item" href="report.php?type=Fake&user=<?php echo $_GET['profile'] ?>">Fake</a>
        <a class="dropdown-item" href="report.php?type=Ugly&user=<?php echo $_GET['profile'] ?>">Ugly</a>
    </div>
</div>
<a class="btn-color btn btn-primary" style="margin-top: 5px;" href="block.php?profile=<?php echo $_GET['profile']?>" role="button">Block</a>
<br />
<br />
</div>
<?php
    include('footer.php');  
?>