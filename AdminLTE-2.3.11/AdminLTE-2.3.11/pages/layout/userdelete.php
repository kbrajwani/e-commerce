<?php 
$id=$_GET["id"];
$user=implode(",",$_POST["chk"]);
require 'kumarhandloom/class.php';
$obj=new database();
if($id!=null)
{
$conn=$obj->userdelete($id);
}
else
{
    $conn=$obj->userdelete($user);
}
if($conn===true)
{
header('location:user.php');
}
?>