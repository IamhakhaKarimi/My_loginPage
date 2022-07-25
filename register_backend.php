<?php
   
//  -----------------------------------------------------<?php 

if(isset($_POST['name']) && isset($_POST['uname']) &&  isset($_POST['password'])){


 $name = $_POST['name'];
 $uname = $_POST['uname'];
 $password = $_POST['password'];

 $data = "name=".$name."&uname=".$uname;
 
 if (empty($name)) {
     $em = "Full name is required";
     header("Location: register_form.php?error=$em&$data");
     exit;
 }else if(empty($uname)){
     $em = "User name is required";
     header("Location: register_form.php?error=$em&$data");
     exit;
 }else if(empty($password)){
     $em = "Password is required";
     header("Location: register_form.php?error=$em&$data");
     exit;
 }else {
   // hashing the password
   $password = password_hash($password, PASSWORD_DEFAULT);

   ///* saving to uploads storage 

   $profile_picture = $_FILES['profile_picture'];

   $file_name=$profile_picture['name'];
   $file_tmp_name=$profile_picture['tmp_name'];
   $file_type=$profile_picture['type'];
   $file_size= $profile_picture['size'];

    $_SESSION['profile_picture'] = $file_name;
    

   if($file_type !='image/jpg' && $file_type != 'image/png'){
       echo '<p style="color:red">File type is other than JPEG or PNG</p>';
   }else{
    echo $file_name." stored to storage documentary.";
   move_uploaded_file($file_tmp_name,'storage/'.$file_name);
   }

   
   //* ********************************
   if (isset($_FILES['profile_picture']['name']) AND !empty($_FILES['profile_picture']['name'])) {
      
      
      $img_name = $_FILES['profile_picture']['name'];
      $tmp_name = $_FILES['profile_picture']['tmp_name'];
      $error = $_FILES['profile_picture']['error'];
      $_SESSION['image_name'] = $img_name;
      
      if($error === 0){
         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
         $img_ex_to_lc = strtolower($img_ex);

         $allowed_exs = array('jpg', 'jpeg', 'png');
         if(in_array($img_ex_to_lc, $allowed_exs)){
            $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
            $img_upload_path = 'storage/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            // Insert into Database
           
            header("Location: register_form.php?success=Your account has been created successfully");
            header('location:login.php');
             exit;
         }else {
            $em = "You can't upload files of this type";
            header("Location: register_form.php?error=$em&$data");
            exit;
         }
      }else {
         $em = "unknown error occurred!";
         header("Location: register_form.php?error=$em&$data");
         exit;
      }

     
   }else {

        header("Location: register_form.php?success=Your account has been created successfully");
        header('location:login.php');
        exit;
   }
 }


}else {
 header("Location: register_form.php?error=error");
 exit;
}
// ------------------------------------------------------
