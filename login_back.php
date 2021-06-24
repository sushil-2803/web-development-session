<?php

if(isset($_POST['login']))
{
    include 'conn.php';

    $username=$_POST['username'];
    $password=$_POST['password'];

    // login query
    $login_query="SELECT * FROM `user` WHERE `username`='$username'";
    $login_result=mysqli_query($conn,$login_query);

    //echo mysqli_num_rows($login_result);
    if(mysqli_num_rows($login_result)>0)
    {
        // mysqli_fetch_assoc this returns key value pair array
        $row=mysqli_fetch_assoc($login_result);
        // print_r($row);
        $db_password=$row['password'];
        if($password==$db_password)
        {
            echo "<script>alert('Logged in')</script>";

            // sessions 
            // $_SESSION super global
            session_start();
            $_SESSION['username']=$username;
            //print_r($_SESSION);
            echo "<script>window.location='profile.php'</script>";

        }
        else
        {
            echo "<script>alert('Wrong password')</script>";
            echo "<script>window.location='login.php'</script>";
        }
        
    }
    else
    {
        echo "<script>alert('Username Does not exsist')</script>";
        echo "<script>window.location='login.php'</script>";
    }
}

?>