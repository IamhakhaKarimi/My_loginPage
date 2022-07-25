<?php 
    $profile_picture = $_FILES['profile_picture'];

    $file_name=$profile_picture['name'];
    $file_tmp_name=$profile_picture['tmp_name'];
    $file_type=$profile_picture['type'];
    $file_size= $profile_picture['size'];

    if($file_type !='image/jpg' and $file_type != 'image/png'  ){
        echo '<p style="color:red">File type is other than JPEG or PNG</p>';
    }

    echo $file_name;
    move_uploaded_file($file_tmp_name,'storage/'.$file_name);
    echo "<img src='storage/$file_name' width='150px'>";

?>
