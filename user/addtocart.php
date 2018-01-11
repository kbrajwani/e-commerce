<?php
session_start();
$id=$_GET["id"];

$email=$_SESSION["email"];

if($email==null)
{
header('location:login.php');
}
else
{
    require 'classproduct.php';
$obj=new classproduct();
$_result=$obj->insertcart($id,$email);
if($_result===true)
{
    header('location:checkout.php');
}
else
{
    header('location:500.php');
}
}
?>