<?php
	include_once ('loged-in.php');
?>

<header class="w3-center w3-margin-bottom">
  <h1><b>Matcha</b></h1>
</header>

<div class="container">
  <div class="row">
    <?php include_once('cards.php') ?>
  </div>
</div>

<?php
  include('footer.php'); 
?>