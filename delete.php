<?php 
    require('main.php');
    if(! is_loggedin()){
        header('location:login.php');
    }

   if( isset( $_POST['file_name'] )){
    $file_name = $_POST['file_name'];

    $path = 'storage/'. $file_name;

    $exists = file_exists($path);
    
    if($exists){
        unlink($path);
    }else{
        echo 'File not found!';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Files</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
    <div class="card shadow w-350 p-3 text-center" >
        <form action="" method="post" class="form">

            <img src="img/filenames.png"  class="img-fluid shadow" >

            <input type="text" name="file_name" method="submitted "  placeholder="Type File name to delete from storage ">
            <br><br>
            <button type="submit" class="btn btn-primary"> Delete File </button>
            <a href="pictureUpload.php" class="btn btn-primary">  Upload Picture    </a>
             <br><br>
        </form>
        
        <a href="logout.php" class="link-secondary">Logout</a>
        
    </div>
<script src="js/bootstrap.bundle.js">

</script>
</body>
</html>