<?php
    include_once '../data.php';
    session_start();

    $user = $_SESSION['user_id'];

    $sql = $conec->prepare("SELECT * FROM pref WHERE user=?");
    $sql->execute([$user]);
    $row = $sql->fetch();
    $tags = unserialize($row['tags']);
    if (sizeof($tags) != 0)
    {
        $j = sizeof($tags);
        $i = 0;
        foreach ($tags as $tag)
        {
            $tag_id = $tag;
            
            $sql = $conec->prepare("SELECT * FROM tags WHERE tag_id=?");
            $sql->execute([$tag_id]);
            $row = $sql->fetch();
            $tag_tag = $row['tag'];
            echo '<a class="btn-color btn btn-primary" style="margin-top: 5px;" href="remove_tag.php?tag='.$tag_id.'" role="button">#'.$tag_tag.' -</a>'.' ';
            $i++;
        }
    }
?>