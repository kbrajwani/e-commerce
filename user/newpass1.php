<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_email="";
    $_password1="";
    $_password2="";
    $_password3="";
$_email=$_GET["email"];
$_token=$_GET["token"];
$_password2=$_POST["txtpassword2"];
$_password3=$_POST["txtpassword3"];
require 'loginclass.php';
$obj=new loginclass();
if($_password2==$_password3)
{
$_result=$obj->updatepassforgot($_email,$_password2,$_token);
if($_result===true)
{
    
    header('location:login.php');
}
else
{
    echo 'password does not match <a href="newpass.php">GO BACK</a>';
}
}
}

?>