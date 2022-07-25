<?php

// User Profile Page//
require('main.php');


 if(! is_loggedin()){
     header('location:login.php');
 }
 
$name = $_SESSION['name'];
$uname = $_SESSION['uname'];

$profile_picture = $_FILES['profile_picture'];

$file_name=$_SESSION['image_name'];
$new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
$img_upload_path = 'storage/'.$new_img_name;
move_uploaded_file($tmp_name, $img_upload_path);

?>
<!-- profile dashboard -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome, Firefox, Safari, IE9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

    <div class=" d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="padding:50px;">
            <div class="card-body">
                <div class=" my_profile shadow w-350 p-3 text-center style='padding:50%;'">
                    
                    <?php
                    echo "<h3 class='card-title'> Welcome, " . $uname . " </h3>";
                ?>
                
                <br><br>
                <a href="pictureUpload.php" class="btn btn-primary">
                    Upload New Picture
                </a> <br>
              <br><br><a href="delete.php" class="btn btn-danger">
                    Delete Picture
                </a><br> <br>
                <a href="logout.php" class="link link-secondary">
                    Logout
                </a> <br>
            </div>

            </div>


        </div>

    </div>



    <script src="js/bootstrap.bundle.js">
    </script>
</body>

</html>