<?php

include 'config.php';

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass_enc = md5($password);

    $sql = "INSERT INTO `users` (`name`, `email`, `username`, `password`) VALUES ('$name', '$email', '$username', '$pass_enc')";
    
    if(mysqli_query($db, $sql)){
        header('location: ../login.php');
    }
    else{
        header('location: ../index.php?error');
    }
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass_enc = md5($password);

    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$pass_enc'";
    $result = mysqli_query($db, $sql);

    if($result -> num_rows > 0){
        $_SESSION['user_auth'] = true;
        $_SESSION['user_data'] = mysqli_fetch_assoc($result);

        if($_SESSION['user_data']['role'] == 0){
            header('location: ../profile.php');
        }
        elseif($_SESSION['user_data']['role'] == 1){
            header('location: ../admin.php');
        }
    }
    else{
        header('location: ../login.php?error');
    }
}

?>