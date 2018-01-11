<html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_cid=$_cname="";
$_cname=$_POST["txtcname"];

require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->categoryinsert($_cname);
if($res===true)
{
        header('location:category.php');
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

     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
     <table class="table container">
     
     <tr><td><input type="text" name="txtcname" placeholder="cname" /><br>
    
     <tr><td><input type="submit" name="btinsert" value="insert"/>
     </table>
     </form>

</body>
</html>