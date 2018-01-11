<?php 
$id=$_GET["id"];
$cart=implode(",",$_POST["chk"]);
require 'kumarhandloom/class.php';
$obj=new database();

if($id!=null)
{
$conn=$obj->cartdelete($id);
}
else
{
    $conn=$obj->cartdelete($cart);
}

if($conn===true)
{
header('location:cart.php');
};
?>