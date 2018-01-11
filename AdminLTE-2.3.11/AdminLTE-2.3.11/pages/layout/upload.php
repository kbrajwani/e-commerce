<?php
if(isset($_POST["btupload"]))
{
$name=$_POST["txtname"];
$target_dir="proimg/";
$target_file=$target_dir . basename($_FILES["txtphoto"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$target_file))
{
    $conn=new mysqli('localhost','root','','productdb');
    $result=$conn->query("insert into product_");
}

}
?>