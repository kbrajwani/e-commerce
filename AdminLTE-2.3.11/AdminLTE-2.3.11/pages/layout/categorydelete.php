<?php 
$id=$_GET["id"];
$cat=implode(",",$_POST["chk"]);
require 'kumarhandloom/class.php';
$obj=new database();

if($id!=null)
{
$conn=$obj->categorydelete($id);
}
else
{
    $conn=$obj->categorydelete($cat);
}
if($conn===true)
{
header('location:category.php');
};
?>