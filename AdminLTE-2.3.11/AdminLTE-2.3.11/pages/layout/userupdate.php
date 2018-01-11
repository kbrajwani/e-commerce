<html>
    
    <header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>   
     <body class="hold-transition skin-blue layout-top-nav">

<?php

$_email=$_name=$_password=$_mobile=$_address=$_gender=$_image="";
$_email=$_GET["id"];

require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->userupdate($_email);
$row=$res->fetch_assoc();
$_email=$row["email"];
$_name=$row["uname"];
$_password=$row["password"];
$_mobile=$row["mobile_no"];
$_address=$row["address"];
$_gender=$row["gender"];
$_image=$row["image"];
$_user_type=$row["user_type"];

?>

     <form method="post" action="userupdate1.php?id=<?php echo $_image;?>" enctype="multipart/form-data">
     <table class="table container">
     <tr><td><input type="text" name="txtemail" placeholder="email" value="<?php echo $_email ; ?>"/><br>
     <tr><td><input type="text" name="txtname" placeholder="name" value="<?php echo $_name; ?>"/><br>
     <tr><td><input type="text" name="txtpassword" placeholder="password" value="<?php echo $_password; ?>"/><br>
    <tr><td> <input type="text" name="txtmobile" placeholder="mobile" value="<?php echo $_mobile; ?>"/><br>
    <tr><td> <input type="text" name="txtaddress" placeholder="address" value="<?php echo $_address; ?>"/><br>
    <tr><td class="input-group">
        <div >
      <span class="input-group-addon" >
        <input type="radio" name="txtgender" value="male" 
        <?php 
     if($_gender=="male"){echo "checked";}
      ?>
         aria-label="...">male
      </span>
      <span class="input-group-addon">
        <input type="radio" name="txtgender" value="female" 
        <?php 
     if($_gender=="female"){echo "checked";}
      ?>
        aria-label="...">female
      </span>  
    </div>
        <br>
    <tr><td> <input type="file" name="txtimage" placeholder="image" value="<?php echo $_image; ?>"/><br>
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