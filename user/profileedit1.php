<?php
session_start();
$_image=$_GET["id"];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_email="";
    $_name="";
    $_password="";
    $_mobile="";
    $_address="";
    $_gender="";
    $_image1="";
$_email=$_SESSION["email"];
$_name=$_POST["txtname"];
$_mobile=$_POST["txtmobile"];
$_address=$_POST["txtaddress"];
$_gender=$_POST["txtgender"];
$target_dir="../userimg/";
$target_file=$target_dir.basename($_FILES["txtimage"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_image1=$target_file;
if($_image1=="../userimg/")
{
    $_image1=null;
}
else
{
    $_image1="userimg/".basename($_FILES["txtimage"]["name"]);
}
require 'loginclass.php';
$obj=new loginclass();
$_result=$obj->update($_email,$_name,$_mobile,$_address,$_gender,$_image1,$_image);

if($_result===true)
{
    
    header('location:profileview.php');
}
else
{
    echo "Not Successfull";
}

}

?>