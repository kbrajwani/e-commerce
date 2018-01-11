<?php

$old=$_GET["old"];
$old1=$_GET["old1"];
$old2=$_GET["old2"];
$_pid=$_POST["txtpid"];
$_pname=$_POST["txtpname"];
$_pcolor=$_POST["txtpcolor"];
$_pprice=$_POST["txtpprice"];
$_pmfg=$_POST["txtpmfg"];
$_pdetail=$_POST["txtpdetail"];
$_pwarrenty=$_POST["txtpwarrenty"];
$_psoh=$_POST["txtpsoh"];
$_fk_cat_id=$_POST["fk_cat_id"];
$_pimg=basename($_FILES["txtpimg"]["name"]);
if($_pimg==null)
{
    $_pimg=$old;
}
else
{
    unlink("../../../../".$old);
$target_dir="../../../../images/";
$target_file=$target_dir . basename($_FILES["txtpimg"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtpimg"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_pimg="images/".basename($_FILES["txtpimg"]["name"]);;
}
$_pimg1=basename($_FILES["txtpimg1"]["name"]);
if($_pimg1==null)
{
    $_pimg1=$old1;
}
else
{
    unlink("../../../../".$old);
$target_dir="../../../../images/";
$target_file=$target_dir . basename($_FILES["txtpimg1"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtpimg1"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_pimg1="images/".basename($_FILES["txtpimg1"]["name"]);;
}
$_pimg2=basename($_FILES["txtpimg2"]["name"]);
if($_pimg2==null)
{
    $_pimg2=$old2;
}
else
{
    unlink("../../../../".$old);
$target_dir="../../../../images/";
$target_file=$target_dir . basename($_FILES["txtpimg2"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtpimg2"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_pimg2="images/".basename($_FILES["txtpimg2"]["name"]);;
}


$hostname="localhost";
$user="root";
$pass="";
$dbname="mattress";
$conn=new mysqli($hostname,$user,$pass,$dbname);
if($conn->connect_error){
    echo "connection error";
}
$_sql="update product_tbl set pname='". $_pname ."',color='". $_pcolor ."',mfg='". $_pmfg ."',price='". $_pprice ."' ,detail='". $_pdetail ."',warrenty='". $_pwarrenty ."',soh='". $_psoh ."',image1='". $_pimg ."',image2='". $_pimg1 ."',image3='". $_pimg2 ."',fk_cat_id='". $_fk_cat_id ."'  where product_id='".$_pid."' ";
if($conn->query($_sql)===true)
{
    header('location:productdisplay.php');
}
else
{
    echo "not successfull";
    echo "update product_tbl set name='". $_pname ."',color='". $_pcolor ."',mfg='". $_pmfg ."',price='". $_pprice ."' ,detail='". $_pdetail ."',warrenty='". $_pwarrenty ."',soh='". $_psoh ."',image1='". $_pimg ."',image2='". $_pimg1 ."',image3='". $_pimg2 ."'  where product_id='".$_pid."' ";
}

?>