<?php 
$id=$_GET["id"];
$bill=implode(",",$_POST["chk"]);
echo $bill;
require 'kumarhandloom/class.php';
$obj=new database();
if($id!=null)
{
$conn=$obj->billdelete1($id);
}
else
{
    $conn=$obj->billdelete1($bill);
}
if($conn===true)
{
header('location:bill.php');
};
?>