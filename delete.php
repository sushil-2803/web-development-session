<?php

if(isset($_POST['delete']))
{
    session_start();

    $username=$_SESSION['username'];

    include 'conn.php';
    //delete query
    $delete_query="DELETE FROM `user` WHERE `username`='$username'";
    $delete_result=mysqli_query($conn,$delete_query);
    if($delete_result)
    {
        echo "<script>alert('Account Deleted')</script>";
        echo "<script>window.location='logout.php'</script>";
    }
}

?>