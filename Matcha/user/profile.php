<?php
    include_once ('../site/loged-in.php');
?>
<br />
<br />
<br />
<header class="w3-center w3-margin-bottom">
    <h1><b><?php session_start(); echo $_SESSION['name']." ".$_SESSION['surname'];?></b></h1>
    <p class="text-center" style="margin-top: -15px; color: grey">@<?php echo $_SESSION['user_name'];?></p>
    <?php include('pop.php'); ?>
    <a class="btn-color btn btn-primary" style="margin-top: 5px;" href="../admin/edit_info.php" role="button">Edit Personal Information</a>
</header>
<div class="text-center">
    <?php include('./user_image.php'); ?>
    <h3 style="margin-top: 10px;"><b>Interests</b></h3>
    <div style="overflow-y: scroll; height: 200px">
        <?php include('get_tags.php') ?>
    </div>
    <hr>
    <h3 style="margin-top: 10px;"><b>My Intrests</b></h3>
    <div style="overflow-y: scroll; max-height: 150px">
        <?php include('my_tags.php') ?>
    </div>
    <hr>
    <h3 style="margin-top: 10px;"><b>My Bio</b></h3>
    <div>
        <?php include('my_bio.php') ?>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class='col-sm mt-3 mb-5'>
                <div style='width: 20rem;'>
                    <img class="image_prev" id="image1" src="<?php include('get_image1.php') ?>" alt="Profile Picture"/>
                <!-- <input type="hidden" id="inE" value=""/> -->
                    <div class="input-group mb-3">
                        <div class="custom-file">
                        <form method="POST" action="upload_img.php" enctype="multipart/form-data">
                            <input type="file" accept="image/*" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image1">
                            <br />
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            <br />
                            <br />
                            <br />
                            <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='col-sm mt-3 mb-5'>
                <div style='width: 20rem;'>
                    <img class="image_prev" id="image2" src="<?php include('get_image2.php') ?>" alt="Profile Picture"/>
                <!-- <input type="hidden" id="inE" value=""/> -->
                    <div class="input-group mb-3">
                        <div class="custom-file">
                        <form method="POST" action="upload_img.php" enctype="multipart/form-data">
                            <input type="file" accept="image/*" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon01" name="image2">
                            <br />
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            <br />
                            <br />
                            <br />
                            <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='col-sm mt-3 mb-5'>
                <div style='width: 20rem;'>
                    <img class="image_prev" id="image3" src="<?php include('get_image3.php') ?>" alt="Profile Picture"/>
                <!-- <input type="hidden" id="inE" value=""/> -->
                    <div class="input-group mb-3">
                        <div class="custom-file">
                        <form method="POST" action="upload_img.php" enctype="multipart/form-data">
                            <input type="file" accept="image/*" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon01" name="image3">
                            <br />
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            <br />
                            <br />
                            <br />
                            <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='col-sm mt-3 mb-5'>
                <div style='width: 20rem;'>
                    <img class="image_prev" id="image4" src="<?php include('get_image4.php') ?>" alt="Profile Picture"/>
                <!-- <input type="hidden" id="inE" value=""/> -->
                    <div class="input-group mb-3">
                        <div class="custom-file">
                        <form method="POST" action="upload_img.php" enctype="multipart/form-data">
                            <input type="file" accept="image/*" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon01" name="image4">
                            <br />
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            <br />
                            <br />
                            <br />
                            <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<br />
<script src="up_photo.js"></script>
<?php
  include('../site/footer.php'); 
?>