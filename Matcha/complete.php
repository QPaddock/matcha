<!DOCTYPE html>
<html>
	<head>
		<title>Preferences</title>
		<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" style="height: 55px">
    </nav>
            <h3 class="text-center h3 mb-3 font-weight-normal">Preferences</h3>
            <form class="form-signin w3-center" action="complete-inc.php" method="POST" id="frm" enctype="multipart/form-data">
            Gender:
                <select class="custom-select" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <br />
                <br />
                Preference: 
                <select class="custom-select" name="pref">
                    <option value="both">Both</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <br />
                <br />
                <textarea id='textbox' class='form-control' rows="3" cols='30' name='bio' form='frm' placeholder='Biography' maxlength="2500" required></textarea>
                <br />
                <img class="image_prev" id="image" src="./resources/add_pic.png" alt="Profile Picture"/>
                <!-- <input type="hidden" id="inE" value=""/> -->
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" accept="image/*" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <br />
                <button class="btn-color btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
            </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="up_photo.js"></script>
    </body>
</html>