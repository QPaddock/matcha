<?php
    include_once ('../site/loged-in.php');
?>

<h3 class="text-center h3 mb-3 font-weight-normal">Change Name</h3>
<form class="form-signin" action="change-inc.php" method="POST">
    <input class="form-control" type="text" name="name" placeholder="Name" required="name">
    <br />
    <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit" id="btn">Change Name</button>
</form>
<hr>
<h3 class="text-center h3 mb-3 font-weight-normal">Change Surname</h3>
<form class="form-signin" action="change-inc.php" method="POST">
    <input class="form-control" type="text" name="surname" placeholder="Surname" required="surname">
    <br />
    <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit" id="btn">Change Surname</button>
</form>
<hr>
<h3 class="text-center h3 mb-3 font-weight-normal">Change Email</h3>
<form class="form-signin" action="change-inc.php" method="POST">
    <input class="form-control" type="email" name="email" placeholder="Email" required="email">
    <br />
    <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit" id="btn">Change Email</button>
</form>
<hr>
<h3 class="text-center h3 mb-3 font-weight-normal">Change Username</h3>
<form class="form-signin" action="change-inc.php" method="POST">
    <input class="form-control" type="text" name="username" placeholder="Username" required="username">
    <br />
    <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit" id="btn">Change Username</button>
</form>
<hr>
<h3 class="text-center h3 mb-3 font-weight-normal">Change Password</h3>
<form class="form-signin" action="change-inc.php" method="POST">
    <input class="form-control" type="password" name="OldPwd" placeholder="Old Password" required="password"/>
    <br />
    <input class="form-control" type="password" name="NewPwd" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain: atleast One Number, a Capital Leter, Lowercase, and must be at least 8 characters" required=>
    <br />
    <input class="form-control" type="password" name="ConNewPwd" placeholder="Confirm New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain: atleast One Number, a Capital Leter, Lowercase, and must be at least 8 characters" required>
    <br />
    <button class="btn-color btn btn-lg btn-primary btn-block" name='submit' value='submit'>Change Password</button>
</form>
<hr>