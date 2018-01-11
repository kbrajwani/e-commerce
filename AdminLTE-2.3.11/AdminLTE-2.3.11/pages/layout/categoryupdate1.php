<?php

$_cid=$_POST["txtcid"];


$_cname=$_POST["txtcname"];
require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->categoryupdate1($_cid,$_cname);

if($res===true)
{
    header('location:category.php');
}
else
{
    echo "not successfull";
}

?>