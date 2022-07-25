<?php 
session_start();

if(isset($_POST['uname']) && isset($_POST['password'])){

    $uname = $_POST['uname'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $profilepicture = $_FILES['profile_picture']; 

    $data = "uname=".$uname;

    $_SESSION['name']= $name;
    $_SESSION['uname'] = $uname;
    $_SESSION['password'] = $password;

    //

    $user =
        [
            'name' => $name,
            'username' => $uname,
        ];

    $_SESSION['auth_user'] = $user;
    $_SESSION['authenticated'] = true;
    //





    header('location: profile.php');
} else {
    header('location:login.php');
}
//      ********************************************************************
 

// query the DB to find the respective user

// 


//      ********************************************************************