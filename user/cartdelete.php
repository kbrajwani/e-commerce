<?php
$id=$_GET["id"];
require 'classproduct.php';
$obj=new classproduct();
$res=$obj->checkoutdelete($id);
if($res===true)
{
    header("location:checkout.php");

}
else
{
    header("500.php");
}
?>