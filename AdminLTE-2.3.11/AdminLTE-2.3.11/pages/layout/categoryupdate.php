<html>
<header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>
     <body class="hold-transition skin-blue layout-top-nav">

<?php 
$_cid=$_cname="";
$_cid=$_GET["id"];

require 'kumarhandloom/class.php';
$obj=new database();
$result=$obj->categoryupdate($_cid);

$row=$result->fetch_assoc();
$_cname=$row["cat_name"];

?>

     <form method="post" action="categoryupdate1.php">
     <input type="text" readonly name="txtcid" value="<?php echo $_cid; ?>"/><br>
     <input type="text" name="txtcname" value="<?php echo $_cname; ?>"/><br>
     
     <input type="submit" name="btupdate" value="update"/>
     </form>


</body>
</html>