<?php

// checking is user has logged in or not thorugh session
session_start();
if(!isset($_SESSION['username']))
{
    echo "<script>alert('Please login')</script>";
    echo "<script>window.location='login.php'</script>";
}


if(isset($_POST['update']))
{
    include 'conn.php';
    $username=$_SESSION['username'];
    $updateUsername=$_POST['updateUsername'];
    $updatePassword=$_POST['updatePassword'];

    //update  query to update username and password
    $update_query="UPDATE `user` SET `username`='$updateUsername',`password`='$updatePassword' WHERE `username`='$username'";
    $update_result=mysqli_query($conn,$update_query);
    if($update_result)
    {
        // updating username in session after making the changes in database
        $_SESSION['username']=$updateUsername;
        echo "<script>alert('Profile Updated')</script>";
        echo "<script>window.location='profile.php'</script>";
    }
    else
    {
        echo "<script>alert('ERROR TRY AGAIN')</script>";
        echo "<script>window.location='profile.php'</script>";
    }

}

?>