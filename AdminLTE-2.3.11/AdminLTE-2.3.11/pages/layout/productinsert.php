<html>
<?php



if($_SERVER["REQUEST_METHOD"]=="POST")
{
$hostname="localhost";
$user="root";
$pass="";
$dbname="mattress";
$conn=new mysqli($hostname,$user,$pass,$dbname);
if($conn->connect_error){
    echo "connection error";
}

$_pid=$_pname=$_pcolor=$_pprice=$_pmanufacturer=$_pwarrenty=$_psoh=$_pimg="";



$_pname=$_POST["txtpname"];
$_pcolor=$_POST["txtpcolor"];
$_pprice=$_POST["txtpprice"];
$_pmfg=$_POST["txtpmfg"];
$_pdetail=$_POST["txtpdetail"];
$_pwarrenty=$_POST["txtpwarrenty"];
$_psoh=$_POST["txtpsoh"];
$target_dir="../../../../images/";
$target_file=$target_dir . basename($_FILES["txtpimg"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtpimg"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_pimg="images/".basename($_FILES["txtpimg"]["name"]);
$target_dir="../../../../images/";
$target_file=$target_dir . basename($_FILES["txtpimg1"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtpimg1"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_pimg1="images/".basename($_FILES["txtpimg1"]["name"]);
$target_dir="../../../../images/";
$target_file=$target_dir . basename($_FILES["txtpimg2"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtpimg2"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_pimg2="images/".basename($_FILES["txtpimg2"]["name"]);
$_cat=$_POST["fk_cat_id"];
$_sql="insert into product_tbl values('". null ."','". $_pname ."','". $_pprice ."','". $_pmfg ."','". $_pcolor ."','". $_pwarrenty ."','". $_pimg ."','". $_pimg1 ."','". $_pimg2 ."','". $_psoh ."','". $_pdetail ."','". $_cat ."')";
if($conn->query($_sql)===true)
{
    echo 'insert';
       // header('location:productdisplay.php');
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
     
     <tr><td><input type="text" name="txtpname" placeholder="pname" /><br>
     <tr><td><input type="text" name="txtpcolor" placeholder="pcolor" /><br>
     
    <tr><td> <input type="number" name="txtpprice" placeholder="price" /><br>
    <tr><td> <input type="text" name="txtpdetail" placeholder="detail" /><br>
    <tr><td> <input type="text" name="txtpwarrenty" placeholder="warrenty" /><br>
    <tr><td> <input type="text" name="txtpsoh" placeholder="soh" /><br>
    <tr><td> <input type="text" name="txtpmfg" placeholder="mfg" /><br>
     <tr><td> <input type="file" name="txtpimg" placeholder="image" /><br>
     <tr><td> <input type="file" name="txtpimg2" placeholder="image2" /><br>
     <tr><td> <input type="file" name="txtpimg1" placeholder="image3" /><br>
<tr><td>
<select name="fk_cat_id">
<?php 
$hostname="localhost";
$user="root";
$pass="";
$dbname="mattress";
$conn=new mysqli($hostname,$user,$pass,$dbname);
if($conn->connect_error){
    echo "connection error";
}
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
     <tr><td><input type="submit" name="btinsert" value="insert"/>
     </table>
     </form>

</body>
</html>