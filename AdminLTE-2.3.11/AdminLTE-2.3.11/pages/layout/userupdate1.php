<?php
$image=$_GET["id"];
$_email=$_POST["txtemail"]; 
$_name=$_POST["txtname"]; 
$_password= $_POST["txtpassword"];
 $_mobile = $_POST["txtmobile"];
  $_address = $_POST["txtaddress"];
   $_gender = $_POST["txtgender"];
   $_user_type = $_POST["txtuser_type"];
$_image =basename($_FILES["txtimage"]["name"]); 
    if($_image=="")
    {
        $_image=$image;  
    }
    else
    {
        unlink("../../../../".$image);
    $target_dir="../../../../userimg/";
$target_file=$target_dir . basename($_FILES["txtimage"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_image ="userimg/".basename($_FILES["txtimage"]["name"]);;
    }
require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->userupdate1($_email, $_name , $_password , $_mobile , $_address , $_gender , $_image ,$_user_type);

if($res===true)
{
    header('location:user.php');
}
else
{
    echo "not successfull";
}

?>