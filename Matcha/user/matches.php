<?php
    include_once('../site/loged-in.php');
?>

<header class="w3-center w3-margin-bottom">
  <h1><b>Matches</b></h1>
</header>


<div class="container">
  <div class="row">
<?php
    include_once('get_matches.php');
    ?>
</div>

<?php
    include('../site/footer.php');
?>