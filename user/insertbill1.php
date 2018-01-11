<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{   session_start();
    $email=$_SESSION["email"];
    $date=date('d-m-y');
  $product=$_POST["product"];
  $total=$_POST["total"];
    $payment=$_POST["radio"];
    
    if($_POST["textarea"]==null)
    {
    $address=$_POST["address"];
    }
    else
    {
        $address=$_POST["textarea"];
    }
require 'classproduct.php';
$obj=new classproduct();

$res=$obj->insertbill($email,$product,$total,$date,$address,$payment);
if($res===true)
{      

    header("location:invoice1.php");
}
else
{
    header("location:500.php");
}
}
?>