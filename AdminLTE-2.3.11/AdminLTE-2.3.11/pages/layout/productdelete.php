<?php 
$id=$_GET["id"];
$product=implode(",",$_POST["chk"]);
echo $product;
require 'kumarhandloom/class.php';
$obj=new database();

if($id!=null)
{
$conn=$obj->productdelete($id);
}
else
{
    $conn=$obj->productdelete($product);
}
if($conn===true)
{
header('location:productdisplay.php');
}
?>