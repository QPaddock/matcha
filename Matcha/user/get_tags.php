<?php
    include_once '../data.php';
    session_start();

    $sql = $conec->prepare("SELECT * FROM tags");
    $sql->execute();
    $row = $sql->fetchAll();
    
    foreach ($row as $elem)
    {
        $tag = $elem['tag'];
        $tag_id = $elem['tag_id'];

        echo '<a class="btn-color btn btn-primary" style="margin-top: 5px;" href="add_tag.php?tag='.$tag_id.'" role="button">#'.$tag.' +</a>'.' ';
    }
?>