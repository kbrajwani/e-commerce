<html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_email=$_name=$_password=$_mobile=$_address=$_gender=$_image=$_verify=$_user_type="";


$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_password=$_POST["txtpassword"];
$_mobile=$_POST["txtmobile"];
$_address=$_POST["txtaddress"];
$_gender=$_POST["txtgender"];
$_verify=$_POST["txtverify"];
$_user_type=$_POST["txtuser_type"];
$target_dir="../../../../userimg/";
$target_file=$target_dir . basename($_FILES["txtimage"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_image="userimg/".basename($_FILES["txtimage"]["name"]);;

require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->userinsert($_email, $_name , $_password , $_mobile , $_address , $_gender , $_image, $_verify, $_user_type );
if($res===true)
{
        //header('location:user.php');
}
else
{
    echo "not successfull";
    
}
}
?>    
    <header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>   
     <body class="hold-transition skin-blue layout-top-nav">

     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
     <table class="table container">
     <tr><td><input type="email" name="txtemail" placeholder="email" /><br>
     <tr><td><input type="text" name="txtname" placeholder="name" /><br>
     <tr><td><input type="password" name="txtpassword" placeholder="password" /><br>
    <tr><td> <input type="number" name="txtmobile" placeholder="mobile" /><br>
    <tr><td> <input type="text" name="txtaddress" placeholder="address" /><br>
    <tr><td class="input-group">
        <div >
      <span class="input-group-addon" >
        <input type="radio" name="txtgender" value="male" aria-label="...">male
      </span>
      <span class="input-group-addon">
        <input type="radio" name="txtgender" value="female" aria-label="...">female
      </span>
    </div>
        <br>
    <tr><td> <input type="file" name="txtimage" placeholder="image" /><br>
     <tr><td> <input type="number" name="txtverify" placeholder="verify" /><br>
     <tr><td> 
     <select name="txtuser_type">
<option selected value="user">user</option>
<option value="admin">admin</option>
     </select><br>
     <tr><td><input type="submit" name="btinsert" value="insert"/>
     </table>
     </form>

</body>
</html>