<?php
require('main.php');
if(! is_loggedin()){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="body">

    <div class="my-form col-sm-6">
        <!-- SIGN UP STARTING PAGE -->

        <form class="shadow w-450 p-3" action="uploader.php" method="post" enctype="multipart/form-data">
            <h4 class="display-4  fs-1">Upload Picture</h4><br>
            <div class="mb-3">
                <label class="form-label">Profile Picture</label>
                <input type="file" class="form-control" name="profile_picture">
            </div>

            <button type="submit" class="btn btn-primary">Upload</button>
            <a href="delete.php" class="btn btn-danger"> Delete Picture </a>
            <br>
            <a href="logout.php" class="link-secondary">Logout</a>
            <a href="profile.php" class="link-primary align-item-right">GO TO Profile</a>

        </form>


        <!-- SIGN UP FINISHING -->

    </div>



    <script src="js/bootstrap.bundle.js">
    </script>
</body>

</html>


<!--******************************************************************************** -->