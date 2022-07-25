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
        
        <form class="shadow w-450 p-3" action="register_backend.php" method="post" enctype="multipart/form-data">

            <h4 class="display-4  fs-1">Create Account</h4><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo (isset($_GET['name'])) ? $_GET['name'] : "" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
                <label class="form-label">Profile Picture</label>
                <input type="file" class="form-control" name="profile_picture">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="login.php" class="link-secondary">Login</a>
        </form>

        <!-- SIGN UP FINISHING -->

    </div>



    <script src="js/bootstrap.bundle.js">
    </script>
</body>

</html>


<!--******************************************************************************** -->