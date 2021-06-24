<?php

// $_POST super global variable in php
//print_r($_POST);
// $_GET is  used for get method in form

include 'conn.php';

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['telephone'];

// sql query to insert user data
$signup_query="INSERT INTO `user`(`username`, `email`, `password`, `phone`) VALUES ('$username','$email','$password','$phone')";
//echo $signup_query;

// excute mysql query

$signup_result=mysqli_query($conn,$signup_query);
if($signup_result)
{
    echo "<script>alert('Signup Successfull')</script>";
    echo "<script>window.location='login.php'</script>";
}
else
{
    echo "operation falied";
}



?>