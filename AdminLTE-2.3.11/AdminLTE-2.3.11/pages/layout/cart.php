<html>
<header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>
     <body class="hold-transition skin-blue layout-top-nav">

     

<?php
require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->getcart();
/*if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo $row["news_title"] ."<br>";
    }
}
else
{
    echo "no records found";
}*/

?>
<div class="container bg-info">
<center><h2>cart table</h2></center>
</div>
<div class="container">
<form method="post" action="cartdelete.php">
<table class="table">
<thead>

<th>email</th>
<th>product_id</th>
<th>quantity</th>
<th>action</th>
</thead>
<?php
while($row=$res->fetch_assoc())
{
    echo "<tr>";

echo '<td>'.$row["fk_email_id"].'</td>';
echo '<td>'.$row["fk_product_id"].'</td>';
echo '<td>'.$row["quantity"].'</td>';
echo '<td>
<input type="checkbox" name="chk[]" value="'.$row["cart_id"].'"> |
<a href="cartdelete.php?id='.$row["cart_id"].'"><span class="glyphicon glyphicon-trash"></span></a> 

</td>';
}
?>
</table>
<input type="submit" value="delete">
</form>
</div>
     </body>
</html>


