<html>
<header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>
    <body class="hold-transition skin-blue layout-top-nav">
<?php 
$_pid=$_pname=$_pcolor=$_psize=$_pprice=$_pmanufacturer=$_pwarrenty=$_psoh=$_pimg="";
$_pid=$_GET["id"];
$hostname="localhost";
$user="root";
$pass="";
$dbname="mattress";
$conn=new mysqli($hostname,$user,$pass,$dbname);

$result=$conn->query("select * from product_tbl where product_id=" . $_pid);
$row=$result->fetch_assoc();
$_pname=$row["pname"];
$_pcolor=$row["color"];
$_pprice=$row["price"];
$_pmanufacturer=$row["mfg"];
$_pdetail=$row["detail"];
$_pwarrenty=$row["warrenty"];
$_psoh=$row["soh"];
$_pimg=$row["image1"];
$_pimg1=$row["image2"];
$_pimg2=$row["image3"];
$_cat=$row["fk_cat_id"];
?>

     <form method="post" action="productupdate1.php?old=<?php echo $_pimg ; ?>&old1=<?php echo $_pimg1 ; ?>&old2=<?php echo $_pimg2 ; ?>" enctype="multipart/form-data">
     <table class="table container">
     <tr><td><input type="text" name="txtpid" readonly placeholder="pname" value="<?php echo $_pid; ?>" /><br>
     <tr><td><input type="text" name="txtpname" placeholder="pname" value="<?php echo $_pname; ?>" /><br>
     <tr><td><input type="text" name="txtpcolor" placeholder="pcolor" value="<?php echo $_pcolor; ?>" /><br>
    <tr><td> <input type="text" name="txtpprice" placeholder="price" value="<?php echo $_pprice; ?>" /><br>
    <tr><td> <input type="text" name="txtpmfg" placeholder="menufaturer" value="<?php echo $_pmanufacturer; ?>" /><br>
    <tr><td> <input type="text" name="txtpdetail" placeholder="detail" value="<?php echo $_pdetail; ?>" /><br>
    <tr><td> <input type="text" name="txtpwarrenty" placeholder="warrenty" value="<?php echo $_pwarrenty; ?>" /><br>
    <tr><td> <input type="text" name="txtpsoh" placeholder="soh" value="<?php echo $_psoh; ?>" /><br>
     <tr><td> <img src="../../../../<?php echo $_pimg; ?>" height="150px" width="150px">
     <tr><td> <input type="file" name="txtpimg" placeholder="image" value="<?php echo $_pimg; ?>" /><br>
<tr><td> <img src="../../../../<?php echo $_pimg; ?>" height="150px" width="150px">
     <tr><td> <input type="file" name="txtpimg1" placeholder="image" value="<?php echo $_pimg1; ?>" /><br>
     <tr><td> <img src="../../../../<?php echo $_pimg; ?>" height="150px" width="150px">
     <tr><td> <input type="file" name="txtpimg2" placeholder="image" value="<?php echo $_pimg2; ?>" /><br>
     <tr><td>
<select name="fk_cat_id">
<?php 

$result=$conn->query("select * from category_tbl");
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
}

}
?>
</select></td></tr>
     <tr><td><input type="submit" name="btupdate" value="update"/>
     </table>
     </form>
</body>
</html>