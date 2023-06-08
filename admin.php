<?php
include 'include/header.php';

if(isset($_SESSION['user_auth'])){
    if($_SESSION['user_data']['role'] == 1){
        echo 'Welcome '.$_SESSION['user_data']['name'].' ('.$_SESSION['user_data']['email'].')';
        echo '<p><a href="logout.php" class="text-decoration-none text-dark">Logout</a></p>';
    }
    else{
        header('location: profile.php');
    }
}

else{
    header('location: login.php');
}

include 'include/footer.php';
?>