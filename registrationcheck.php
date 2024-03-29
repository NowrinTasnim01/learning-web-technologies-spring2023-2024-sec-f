<?php
session_start();
$password=$_REQUEST['password'];
$cpassword=$_REQUEST['cpassword'];

if($password==$cpassword)
{
    header('location: home.php');
}
    else{
    $_SESSION['flag'] = "true";
    echo"invaid";
}
?>