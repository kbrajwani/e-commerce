<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_email="";
    $_password1="";
    $_password2="";
    $_password3="";
$_email=$_SESSION["email"];
$_password1=$_POST["txtpassword1"];
$_password2=$_POST["txtpassword2"];
$_password3=$_POST["txtpassword3"];
require 'loginclass.php';
$obj=new loginclass();
if($_password2==$_password3)
{
$_result=$obj->updatepass($_email,$_password1,$_password2);
if($_result===true)
{
    
    header('location:profileview.php');
}
else
{
    echo "old password is incorrect";
}

}
else
{
echo "password does not match";
}

}

?>